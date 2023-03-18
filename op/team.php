<?php 
    abstract class Music {
        abstract function display ();
    }
    
    class category extends Music {
        public $maChuyenMuc;
        private $tenChuyenMuc;
        private $moTa;

        function __construct($maChuyenMuc,$tenChuyenMuc,$moTa) {
            $this->maChuyenMuc=$maChuyenMuc;
            $this->tenChuyenMuc=$tenChuyenMuc;
            $this->moTa=$moTa;


        }
        function display () {
            return $this->maChuyenMuc."<br>".$this->tenChuyenMuc."<br>".$this->moTa."<br>" ;
        }
    }

    class album extends Music {
        private $id;
        private $ten;
        private $mota;
        private $gia;
        private $soluong;
        function __construct($id,$ten,$mota,$gia,$soluong){
            $this->id=$id;
            $this->ten=$ten;
            $this->mota=$mota;
            $this->gia=$gia;
            $this->soluong=$gia;

        }
        function display() {
            return $this->id .'<br>'.$this->ten .'<br>'.$this->mota .'<br>'.$this->gia . '<br>'.$this->soluong.'<br>' ;
        }

    };
    
    class Song extends Music{
        private $id;
        private $ten;
        private $duongDan;
        private $doDai;
        private $lyric;

        function __construct($id,$ten,$duongDan,$doDai,$lyric){
            $this->id = $id;
            $this->ten = $ten;
            $this->duongDan = $duongDan;
            $this->doDai = $doDai;
            $this->lyric = $lyric;

        }
        public function display(){
            return  "Mã bai hat" .$this->id."<br>". "Tên bài hát :".$this->ten."<br>"."Đường dẫn: ".$this->duongDan."<br>"."Độ dài: ".$this->doDai."<br>"."Lời bài hát". $this->lyric ;
        }
    }

    class Singer extends Music {
        private $id;
        private $ten;
        private $gioiTinh;
        public function __contstruct( $id,$ten,$gioiTinh){
            $this->id = $id;
            $this->ten = $ten;
            $this->gioiTinh = $gioiTinh;
        }

        public function display(){
            return "Mã: ". $this->id."<br>"."Ten: ". $this->ten."<br>"."GioiTinh: ". $this->gioiTinh."<br>"."<br>";
        }
    }
    
    class Artist extends Music{
        private $id;
        private $hoVaTen;
        private $gioiTinh;

        public function __construct($id,$hoVaTen,$gioiTinh){
            $this->id =$id;
            $this->hoVaTen = $hoVaTen;
            $this->gioiTinh = $gioiTinh;
        }
        public function display(){
            return "---------------"."<br>"."Mã: ". $this->id."<br>"."Họ và tên: ". $this->hoVaTen."<br>" ."Giới tính: ". $this->gioiTinh;
        }
    }

   

    $album1= new album(1,"Nhac tru tinh","Rat hay",10,"9");
    echo 'Album: '.$album1 ->display();

    $Song1 = new Song (1,"Đắp mộ cuộc tình","http://canhac",20000,"Lá la lá la");
    echo '<div> '.'</div>'. $Song1->display() ;

    // $Singer1 = new Singer (1,"Thu Tran","Nữ");
    // echo 'Ca si: '. $Singer1->display();
    $Artist1 = new Artist (1,"Bui Thi Thanh Thuy","Nữ");
    echo ' <br>Nghe si: '. $Artist1->display();

?>