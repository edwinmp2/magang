<?php
	class Bantal
	{
		
		public $kapuk;
		public $kain;
		public $sarung 

		public function bersandar()
		{
			return 'bersandar';
		}

		public function lempar()
		{
			return 'lempar';
		}
	}

	class Kasur
	{
		public $kapuk;
		public $kain;
		public $sprei;

		public function tidur()
		{
			return 'tidur';
		}

		public function rebahan()
		{
			return 'rebahan';
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

		public function Makan()
		{
			return 'makan';
		}
	}

	class Kursi
	{
		public $sandaran;
		public $dudukan;
		public $kaki;

		public function duduk()
		{
			return 'duduk';
		}

		public function naik()
		{
			return 'naik';
		}
	}

	class Jam
	{
		public $baterai;
		public $kerangka;
		public $gear;

		public function waktu()
		{
			return 'lihat waktu';
		}

		public function gantiBaterai()
		{
			return 'ganti baterai';
		}
	}

	class Jaket
	{
		public $saku;
		public $resleting;
		public $kerah;

		public function kenakan()
		{
			return 'kenakan';
		}

		public function lepaskan()
		{
			return 'lepaskan';
		}
	}

	class Pintu
	{
		public $ganggang;
		public $kunci;
		public $baut;

		public function bukaPintu()
		{
			return 'buka';
		}

		public function tutupPintu()
		{
			return 'tutup';
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

		public function tutupJendela()
		{
			return 'tutup Jendela';
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

		public function lepas()
		{
			return 'lepas';
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

		public function turun()
		{
			return 'turun';
		}
	}
?>