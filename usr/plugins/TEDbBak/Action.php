<?php
    class TEDbBak_Action extends Typecho_Widget implements Widget_Interface_Do {
        private $bakdir = "bak";
        private $baseName = "tedb_";
        private $limit = 5;
        private $bakpath;
        private $db;

        public function __construct($request, $response, $params = NULL) {
            parent::__construct($request, $response, $params);
            $this->db = Typecho_Db::get();
            $this->options = $this->widget('Widget_Options');
            $this->bakpath = dirname(__FILE__).DIRECTORY_SEPARATOR.$this->bakdir.DIRECTORY_SEPARATOR;
            $baknum = intval(Typecho_Widget::widget('Widget_Options')->plugin('TEDbBak')->baknum);
            if ($baknum > 0) {
                $this->limit = $baknum;
            }
            if(! is_dir($this->bakpath)) {
                mkdir($this->bakpath);
            }
        }

        public function action() {
            if (! $this->widget("Widget_User")->pass("administrator")) {
                return false;
            }
            $opt = $this->request->get("opt");
            if ($opt == "bak") {
                $filename = $this->bakup();
                echo json_encode(array("filename"=>$filename));
            } else if ($opt == "history") {
                $list = $this->hislist();
                echo json_encode($list);
            } else if ($opt == "down") {
                $this->download();
            } else if ($opt == "restore") {
                $this->restore();
            }
        }

        private function restore() {
            $filename = $this->request->get("file");
            $content = @file_get_contents($this->bakpath.$filename);
            $content = str_ireplace("\r\n", "", $content);
            $this->db->query($content);
            echo "restore ok";
            //echo $content;
        }

        private function download() {
            $filename = $this->request->get("file");
            $content = @file_get_contents($this->bakpath.$filename);
            $this->response->setContentType("text/plain");
            echo $content;
        }

        private function hislist() {
            $ret = array();
            if (!is_dir($this->bakpath)) {
                return $ret;
            }
            $bakdir = opendir($this->bakpath);
            while(($bakf = readdir($bakdir)) != false) {
                if ($bakf == "." || $bakf == ".." || $bakf == ".htaccess") {
                    continue;
                }
                $ret[] = $bakf;
            }
            closedir($bakdir);
            while (count($ret) > $this->limit) {
                $delf = array_shift($ret);
                @unlink($this->bakpath.$delf);
            }
            return array_reverse($ret);
        }

        private function bakup() {
            $tables = $this->db->query("show tables");
            $content = "";
            while($t = $this->db->fetchRow($tables)) {
                $vals = array_values($t);
                $tname = $vals[0];
                if (strpos($tname, $this->db->getPrefix()) !== 0) {
                    continue;
                }
                $tq = $this->db->query("show create table `$tname`");
                $tqrow = $this->db->fetchRow($tq);
                $content .= "drop table $tname;\r\n";
                $create = $tqrow["Create Table"];
                $content .= $create.";\r\n";
                $sel = $this->db->query("select * from $tname");
                while($selitem = $this->db->fetchRow($sel)) {
                    $names = array_keys($selitem);
                    $vals = array_values($selitem);
                    $names = join('`,`', $names);
                    $names = "`" . $names . "`";
                    $vals = array_map('addslashes', $vals);
                    $vals = join("','", $vals);
                    $vals = "'" . $vals . "'";
                    $insert = "insert into `$tname`($names) values($vals);";
                    $content .= $insert."\r\n";
                }
            }
            $filename = $this->getNewFileName();
            file_put_contents($this->bakpath.$filename, $content);
            return $filename;
        }

        private function getNewFileName() {
            $dstr = date("Ymd.His");
            $filename = $this->baseName.$dstr;
            return $filename;
        }

        public function forbid() {
            echo "no permission";
        }
    }
?>