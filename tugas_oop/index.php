<?php
	class Bantal
	{
		
		public $kapuk;
		public $kain;
		public $sarung 

		public function sandaran()
		{
			return 'untuk bersandar';
		}
	}

	class Kasur
	{
		public $kapuk;
		public $kain;
		public $sprei;

		public function tidur()
		{
			return 'untuk tidur';
		}
	}

	class Meja
	{
		public $kayu;
		public $baut;
		public $besi;

		public function tempatLaptop()
		{
			return 'untuk tempat laptop';
		}
	}

	class Kursi
	{
		public $sandaran;
		public $dudukan;
		public $kaki;

		public function duduk()
		{
			return 'untuk duduk';
		}
	}

	class Jam
	{
		public $baterai;
		public $kerangka;
		public $gear;

		public function waktu()
		{
			return 'untuk melihat waktu';
		}
	}

	class StopKontact
	{
		public $kabel;
		public $baut;
		public $lempengan;

		public function colokanListrik()
		{
			return 'untuk colokan';
		}
	}

	class Pintu
	{
		public $ganggang;
		public $kunci;
		public $baut;

		public function buka()
		{
			return 'buka';
		}
	}

	class Jendela
	{
		public $kaca;
		public $besi;
		public $baut;

		public function bukaJendela()
		{
			return 'buka Jendela';
		}
	}

	class Sepatu
	{
		public $sol;
		public $kain;
		public $sepatu;

		public function pakai()
		{
			return 'pakai';
		}
	}

	class Motor
	{
		public $ban;
		public $rem;
		public $spion;

		public function naiki()
		{
			return 'naiki';
		}
	}
?>