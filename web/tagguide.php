<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
   <title>French Revolution Pamphlet Collection Overview</title>
   <link rel="stylesheet" type="text/css" href="fr.css">
</head>
<body>

<?php
$headtitle = "Tagging Guidelines";
include("header.php");
?>
<CENTER><H2>Guidelines for Tagging<br>French Revolution Pamphlet Collection</H2></CENTER>
<p>&nbsp;</p>
<p>Use the online <a href="http://www.tei-c.org/P4X/">TEI Guidelines</a>, especially Chpt. 35 which lists all of the tags and the chapters in which they are referenced.</p>
<p>Below you will find an example containing all the tags (listed in the order they 
usually appear) used in the project up to this point.</p><lb>

<p>To find how a given tag was used in a specific text, you can search for the tag:<br>
In a terminal window go to the /revolution/data directory, and in the cmd line, type:<br>
grep -l "&lt;thetagyouwant&gt;" * .sgm<br>
-- this will list all instances where the tag was used.</p><lb>

<p>** id -- these must be unique, and follow the pattern r+filename+description (ex. id="r115n05note1"). If no
descript. is really applicable then, r+filename (ex. id="r113n02"). Usually, the first div1 id in the body is named simply r+filename and the type specifies the main category.<br>
** type -- in order to facilitate searching, at least one of these per document should describe the
document as a whole, and in doing so, fit into one of the following categories: piece, poeme, religious, misc.
These categories might also be used to categorize, for example, a chanson that appears at the end of a
given pamphlet.</p><lb>

<p>EXAMPLE<br>
&lt;tei.2&gt; <br>
&lt;teiheader&gt; <br>
&lt;filedesc&gt;<br>
&lt;titlestmt&gt;<br>
&lt;title&gt;XXX&lt;/title&gt; <br>
&lt;author&gt;XXX&lt;/author&gt; <br>
&lt;respstmt&gt;&lt;resp&gt;Compiled and edited by&lt;/resp&gt;&lt;name&gt;Michael Kazanjian&lt;/name&gt;&lt;/respstmt&gt;&lt;/titlestmt&gt;<br>
&lt;publicationstmt&gt;&lt;publisher&gt;Lewis H. Beck Center&lt;/publisher&gt;<br>
&lt;pubplace&gt;Emory University&lt;/pubplace&gt;&lt;address&gt;&lt;addrline&gt;Atlanta, Georgia  30322&lt;/addrline&gt;&lt;/address&gt;<br>
&lt;availability&gt;&lt;p&gt;(Copyright description)&lt;/p&gt;&lt;/availability&gt;<br>
&lt;date&gt;2002&lt;/date&gt;&lt;/publicationstmt&gt;<br>
&lt;seriesstmt&gt;&lt;title&gt;French Revolution Pamphlet Collection&lt;/title&gt; &lt;/seriesstmt&gt;<br>
&lt;sourcedesc&gt;&lt;bibl&gt;&lt;title&gt;XXX&lt;/title&gt;<br>
&lt;pubplace&gt;Paris?&lt;/pubplace&gt;&lt;date&gt;1790&lt;/date&gt;&lt;/bibl&gt;&lt;/sourcedesc&gt;<br>
&lt;/filedesc&gt; </p><lb>

<p>&lt;encodingdesc&gt;&lt;projectdesc&gt;&lt;p&gt;(Description of the project)&lt;/p&gt;<br>
&lt;/projectdesc&gt;<br>
&lt;editorialdecl&gt;&lt;p&gt;(Description of editorial decisions)&lt;/p&gt;<br>
&lt;/editorialdecl&gt;<br>
&lt;/encodingdesc&gt; </p><lb>

<p>&lt;profiledesc&gt;<br>
&lt;creation&gt;&lt;date&gt;1790&lt;/date&gt;&lt;/creation&gt;&lt;/profiledesc&gt;</p><lb>

<p>&lt;revisiondesc&gt;&lt;change&gt;&lt;date&gt;2002&lt;/date&gt; <br>
&lt;respstmt&gt;&lt;name&gt;Michael Kazanjian&lt;/name&gt;&lt;resp&gt;staff&lt;/resp&gt;&lt;/respstmt&gt; <br>
&lt;item&gt;Sgml tags inserted in compliance with TEI guidelines using TEI P3&lt;/item&gt;&lt;/change&gt;&lt;/revisiondesc&gt;</p><lb>

<p>&lt;/teiheader&gt;</p><lb>

<p>&lt;text&gt;<br>
&lt;front&gt;(used this for all front matter)<br>
&lt;titlepage&gt;<br>
&lt;doctitle&gt;&lt;titlepart&gt;(Title)&lt;/titlepart&gt;<br>
&lt;titlepart&gt;(Subtitle)&lt;/titlepart&gt;&lt;/doctitle&gt;<br>
&lt;docauthor&gt;XXX&lt;/docauthor&gt;<br>
&lt;docdate&gt;XXX&lt;/docdate&gt;<br>
&lt;pb n= "1"&gt; (end of page one)</p><lb>

<p>&lt;epigraph&gt;<br>
&lt;q&gt;&lt;hi rend="italic"&gt;XXX&lt;/hi&gt;&lt;/q&gt;<br>
&lt;bibl&gt;authorofepigraph&gt;&lt;/bibl&gt;&lt;/epigraph&gt;</p><lb>

<p>&lt;titlepart&gt;<br>
&lt;figure&gt;&lt;figDesc&gt;Angel motif imprint&lt;/figDesc&gt;&lt;/figure&gt;&lt;/titlepart&gt;</p><lb>

<p>&lt;docimprint&gt;(publication info)&lt;/docimprint&gt;<br>
&lt;/titlepage&gt;</p><lb>

<p>&lt;div1 id="XXX" type="XXX"&gt;I used div1 for:<br>
-- intro material<br>
-- "Dedicace" (with &lt;name&gt; and &lt;lg type="stanza"&gt; tags", "Avertissement"<br>
(with &lt;title&gt; tag), "Avis au lecteur"<br>
-- list of characters: id="pers" type="Personnages"<br>
(then using &lt;list&gt;, &lt;head&gt; and &lt;item&gt; tags)</p><lb>

<p>&lt;stage type="location"&gt;(or "setting"; for stage directions, use "business" or "delivery")<br>
&lt;/front&gt;<br>
------------------<br>
&lt;body&gt;(for a theatrical piece)<br>
&lt;div1 id="a1" type="Acte" n="1"&gt;<br>
&lt;head&gt;ACTE PREMIER&lt;/head&gt;<br>
&lt;div2 id="a1s1" type="Scene" n="1"&gt;<br>
&lt;head&gt;SCENE PREMIERE&lt;/head&gt;<br>
&lt;p&gt;CALONNE, DURUEY.&lt;/p&gt;<br>
&lt;sp&gt;&lt;speaker&gt;CALONNE&lt;/speaker&gt;<br>
&lt;lg type="speech"&gt;&lt;l&gt;XXX&lt;/l&gt;&lt;/sp&gt;</p><lb>

<p>OR</p><lb>

<p>&lt;body&gt;(for another genre of pamphlet)<br>
&lt;div1 id="chanson" type="Chanson" n="(title)"&gt;<br>
or<br>
&lt;div1 id="body" type="Body"&gt;<br>
&lt;pb n= "1"&gt;<br>
&lt;bibl&gt;Se vend chez le citoyen&lt;name&gt;GOUJON&lt;/name&gt;, marchand de musique...  A PARIS.&lt;/bibl&gt;<br>
&lt;p rend="rule center"&gt;&lt;/p&gt;</p><lb>

<p>&lt;p&gt;&lt;title&gt;XXX&lt;/title&gt;&lt;/p&gt;</p><lb>

<p>&lt;lg type=stanza&gt;<br>
&lt;l&gt;XXX&lt;/l&gt;<br>
or<br>
-- simply use &lt;p&gt; for prose</p><lb>

<p>&lt;seg&gt;I have used this to code a note in 115n11</p><lb>

<p>&lt;hi rend= "italic"&gt; Use this tag for italic emphasis</p><lb>

<p>&lt;ref target="note001"&gt;*&lt;/ref&gt;<br>
&lt;note id="note001"&gt;* XXX&lt;note&gt;</p><lb>

<p>&lt;trailer rend="center"&gt; FIN &lt;/trailer&gt;<br>
&lt;/div2&gt;&lt;/div1&gt;</p><lb>

<p>&lt;div1 id="postscript" type="P.S."&gt;</p><lb>

<p>&lt;byline&gt;name of author&lt;/byline&gt; or &lt;signed&gt;name of author&lt;/signed&gt;</p><lb>

<p>&lt;/body&gt;<br>
------------------<br>
&lt;back&gt;</p><lb>

<p>&lt;div1 id="colophon" type="Colophon"&gt;<br>
&lt;p&gt;A PARIS, de l'imprimerie de...&lt;/p&gt;<br>
&lt;/div1&gt;</p><lb>

<p>&lt;div1 id="Notes" type="Notes"&gt;<br>
&lt;head&gt;NOTES&lt;/head&gt;<br>
-- also used back matter div1s for:<br>
editor's notes, epilogue, postface<br>
(with &lt;head&gt; or &lt;title&gt; tags</p><lb>

<p>(put figure entities/page images at end of back matter)<br>
&lt;div1 id="figures"&gt;<br>
&lt;p&gt;&lt;figure entity="atten01" n="1"&gt;&lt;figDesc&gt;Image of page 1&lt;/figDesc&gt;&lt;/figure&gt;&lt;/p&gt;</p><lb>
<p>&lt;/back&gt;<br>
&lt;/text&gt;<br>
&lt;/tei.2&gt;</p><lb>
<p>&nbsp;</p>

</tr>
</td>

<tr>
</table>
<?php include("footer.xml"); ?>
</body>
</html>
