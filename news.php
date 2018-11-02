<?php
class GetNews
{
	private $file;
	private $title;
	private $autor;
	private $description;
	public function __construct($file)
	{
		$this->file = $file;
	}
	public function getContents()
	{
		$file = $this->file;
		$fileTest = file_get_contents($file);
		$decodeFile = json_decode($fileTest, true);
		$title=$decodeFile[0]['title'];
		$autor=$decodeFile[0]['autor'];
		$description=$decodeFile[0]['description'];
		return "<h4>$title</h4>автор - $autor<br><br>$description";
	}
}
?>
<h3>Новые книги в нашем магазине</h3>
<?php
$news1 = new GetNews('news1.json');
echo $news1->getContents();
$news1 = new GetNews('news2.json');
echo $news1->getContents();
$news1 = new GetNews('news3.json');
echo $news1->getContents();
?>