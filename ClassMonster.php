<?php
class Monster{
	private $name; 
	private $race;
	private $STR = 0;
	private $DEF = 0;
	private $AGI = 0;
	private $VIT = 0;
	private $rank;

	public function getName(){
		return $this->name;
	}
	public function setName($name){
		$this->name = $name;
	}
	public function getRace(){
		return $this->race;
	}
	public function setRace($race){
		$this->race = $race;
	}
	public function getSTR(){
		return $this->STR;
	}
	public function setSTR($STR){
		$this->STR = $STR;
	}
	public function getDEF(){
		return $this->DEF;
	}
	public function setDEF($DEF){
		$this->DEF = $DEF;
	}
	public function getAGI(){
		return $this->AGI;
	}
	public function setAGI($AGI){
		$this->AGI = $AGI;
	}
	public function getVIT(){
		return $this->VIT;
	}
	public function setVIT($VIT){
		$this->VIT = $VIT;
	}
	public function getRank(){
		return $this->rank;
	}
	public function setRank($rank){
		$this->rank = $rank;
	}

	//Constructor
	public function __construct($rank){
		$this->rank = $rank;
	}

	//The automatic monster's name generator
	public function nameIt(){
		switch ($this->race) {
			case 'Warg':
				$syllable = array("gal","tu","po","ma","ku","si","il","ol","an","ok","as","is");
				break;
			case 'Gryph':
				$syllable = array("mi","po","ei","uo","ul","ol","un","en","ga","lo");
				break;
			case 'Slime':
				$syllable = array("go","sma","me","le","ka","ge","lei","a");
				break;
			case 'Harpies':
				$syllable = array("fi","ri","ha","bi","no","ze","tu","ko","mi","po","ei","uo");
				break;
			case 'Kobold':
				$syllable = array("ka","pe","lo","bo","an","ta");
				break;
			case 'Cyclops':
				$syllable = array("ko","mi","po","ei","uo","ul","ol","un","en","an");
				break;
			case 'Centaur':
				$syllable = array("ok","as","is","vu","ve","da","do","du","th","se","o","u");
				break;
			case 'Merman':
				$syllable = array("a","ri","el","bi","no","ze","tu","ko","mi","po","ei","tri","ton");
				break;
			case 'Murloc':
				$syllable = array("pei","xe","ho","men","fo","ka","mu","la");
				break;
			case 'Minotaur':
				$syllable = array("oks","hea","die","biz","zar","re","cre","ta");
				break;
			case 'Ogre':
				$syllable = array("sh","r","ek","po","u","go","li","ath","or");
				break;
			case 'Golem':
				$syllable = array("ti","tan","pa","per","go","gis","ka","ki","ha","hel","ave","gen","kan");
				break;
			case 'Copper Centipede Golem':
				$syllable = array("ga","lo","fo","ka","mu","la","pe","me","fi","ri","bi","no","ze","tu","ko","mi","po","vu","ve","da","do","du","se","gron","tran");
				break;

		}
		/*A random number between 1 and 5 is taken and for each number is sorted a syllable pre-defined on arrays. 
		The syllable on arrays depends on monsters's race.*/
		$syNum = rand(1,5);
		$name = "";
		for($syNum; $syNum > 0; $syNum--){
			$name = $name . $syllable[rand(0,count($syllable)-1)];
		}
			$this->name = ucfirst($name);
	}

	//The automatic monster's race generator
	public function raceIt(){
		$race = array('Warg', 'Gryph','Slime','Harpies', 'Kobold', 'Cyclops', 'Centaur', 'Merman', 'Murloc', 'Minotaur', 'Ogre', 'Golem', 'Copper Centipede Golem');
		$this->race = $race[rand(1,count($race) - 1)];
	}

	//The automatic monster's status generator
	public function roll(){
		$this->STR = 0;
		$this->DEF = 0;
		$this->AGI = 0;
		$this->VIT = 0;
		/*At each rank(lvl) the monster's status compute plus 2 status ponts including rank 1.
		The base points is equals 6 and the formula is the base points plus the monster hank times two */
		$points = 6 + ($this->rank * 2);
		/*The roullete points machine. It will distribute ponts randomly till the last. When finished, a test will check if any attributes is equals zero.
		Cause would be a very unbalanced monster to deal.*/
		while($points > 0){
			switch (rand(1,4)){
				case 1:
					$this->STR++;
					$points--;
					break;
				case 2:
					$this->DEF++;
					$points--;
					break;
				case 3:
					$this->AGI++;
					$points--;
					break;
				case 4:
					$this->VIT++;
					$points--;
					break;
				default:
					break;
			}
		}
		//the test
		if($this->STR == 0){
			$this->roll();
		}else if($this->DEF == 0){
			$this->roll();
		}else if($this->AGI == 0){
			$this->roll();
		}else if($this->VIT == 0){
			$this->roll();
		}
	}
}
?>