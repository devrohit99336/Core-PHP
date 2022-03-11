<?php 
    /**
     * 
     * PHP में Traits code reusability का एक mechanism है। Traits का main purpose Single inheritance problem को solve करना है।


        *हम जानते हैं कि PHP Multiple Inheritance को support नहीं करती है , means कोई Class एक से ज्यादा classes को ही inherit नहीं कर सकती है। एक single class एक बार में एक class को ही inherit कर सकती है। लेकिन कई जगह पर ऐसी जरूरत पड़ ही जाती है जहाँ पर एक से ज्यादा classes को inherit कर सकें जिससे code को reuse कर सकें। इसलिए PHP में Traits को Introduce किया गया।


        *Traits को PHP 5.4 में introduce किया गया था। जिससे कि DRY(Don’t repeat yourself) concept को ज्यादा से ज्यादा use किया जा सके। Traits define करने के लिए trait keyword का use किया जाता है। जिसमे अपनी need के according कितने ही methods को define कर सकते हैं।


        *Traits का Class की तरह Object नहीं बनाया जा सकता है , और न ही class की तरह constructor & destructor बनाये जा सकते हैं।

        *PHP Traits Example
        *Traits में defined functions को आप class में use keyword का use करके use कर सकते हैं।
     */



	/*defining trait*/
	trait Hello
	{
	    public function sayhi()
	    {
	        echo 'Hi !';
	    }
	}

	/*define class*/
	class MyClass
	{
	    use Hello;
	}   
	
	$obj = new MyClass();
	$obj->sayhi();
?>