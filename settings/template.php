<?phpclass Template{	public $styleid;	function __construct($styleid)	{			global $MySQL;		$this->style  = $MySQL->fetch("web","styles","*","WHERE id = '$styleid'");		}}?>