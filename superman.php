<?php
	class Superman{
		
		protected $power;
		
		function __construct()
		{
			$this->power = new Power(999, 100);
		}
	}
	
	class Power {
		protected $ability;
		
		protected $range;
		
		public function __construct($ability, $range)
		{
			$this->ability = $ability;
			$this->range = $range;
		}
	}
	
	class Flight
	{
		protected $speed;
		protected $holdtime;
		public function __construct($speed, $holdtime){}
	}
	
	class Force
	{
		protected $force;
		public function __construct($force){}
	}
	
	class Shot
	{
		protected $shot;
		public function __construct($shot){}
	}
	
	class SuperMoudleFactory
	{
		public function makeMoudle($moduleName, $options)
		{
			switch ($moduleName)
			{
				case 'Flight': return new Flight($options[0], $options[1]);
				case 'Force':   return new Force($options[0]);
                case 'Shot':    return new Shot($options[0], $options[1], $options[2]);

			}
		}
	}


$superman = new Superman();

?>
	
	
	