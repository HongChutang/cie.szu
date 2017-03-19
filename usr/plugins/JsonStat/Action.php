<?php
    class JsonStat_Action extends Typecho_Widget implements Widget_Interface_Do {
        private $db;

        public function __construct($request, $response, $params = NULL) {
            parent::__construct($request, $response, $params);
            $this->db = Typecho_Db::get();
        }

        private function download() {}

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
        
        public function forbid() {
            echo "no permission";
        }
    }
?>