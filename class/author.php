<?php
    class Author{
        private $tentacgia;
        private $gioitinh;
        private $ngaysinh;
        private $diachi;

        public function Author($tentacgia,$gioitinh,$ngaysinh,$diachi){
            $this->tentacgia=$tentacgia;
            $this->gioitinh=$gioitinh;
            $this->ngaysinh=$ngaysinh;
            $this->diachi=$diachi;
        }
        public function Display_Author()
        {
            return
                "Tên tác giả".$this->tentacgia."<br>".
                "Giới tính".$this->gioitinh."<br>".
                "Ngày sinh".$this->ngaysinh."<br>".
                "Địa chỉ".$this->diachi."<br>";
        }
    }   
    $Author=new Author();
    $Author->Author("name","gt","ns","dc");
    echo $Author ->Display_Author();
    echo "###-------###"."<br>";
?>