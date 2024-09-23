<!-- Jquery-ui (for AutoComplete) -->
<script src="plugin/jquery-ui/jquery-1.12.4.js"></script>
<script src="plugin/jquery-ui/jquery-ui.js"></script>
<link href="plugin/jquery-ui/jquery-ui.css" rel="stylesheet" type="text/css" />
<script>
  $( function() {
    var availableTags = [
     "地瓜","紅土地","田地","大肚山","古井","瑞井","風景","土角厝","我來自大肚山","東海大學","路思義教堂","牛車",
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#menu-search" ).autocomplete({
      source: availableTags
    });
    $( "#tagsearch" ).autocomplete({
      source: availableTags
    });
  } );

</script>