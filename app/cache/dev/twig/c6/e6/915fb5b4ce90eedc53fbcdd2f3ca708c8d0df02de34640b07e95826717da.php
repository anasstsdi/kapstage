<?php

/* GripliCvBundle:Default:cv.html.twig */
class __TwigTemplate_c6e6915fb5b4ce90eedc53fbcdd2f3ca708c8d0df02de34640b07e95826717da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1 class=\"title\">Cvthèque</h1>
<div>
<table cellspacing=\"0\" cellpadding=\"4\" width=\"100%\">
<tr>
 <td> <p><b> ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "name"), "html", null, true);
        echo " </b></p>5, rue rivoli  - 91000 Evry <br> Tel : 066910093184 <br> 
Portable : 0656532147 <br> Email :  ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "getuser", array(), "method"), "getEmail"), "html", null, true);
        echo " <br>  24 ans  <br> En couple : Permis B </td>
<td> <img src=\"\" alt=\"photo\" STYLE=\" height:100px;width:100px; margin-left:60%;\" > </td>
</tr>
</table>
</div>
 <p bgcolor=\"#FFFF80\" align=\"center\" style=\"font-weight: 900\"> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "title"), "html", null, true);
        echo " 
 <br>Trilingue anglais - Français - arabe</p>
<b>Formation</b><br>
<table cellspacing=\"0\" cellpadding=\"4\" width=\"100%\" STYLE=\" border-style:solid;
border-color:#7aa37a;\">
<tr>  <td> <b> Fev - juillet 2011 </b>  </td> <td>  <b> Converlogic - stage informatique </b>  <br> - Developpeur Java  <br> - Gestion base de donnees </td>  </tr>
<tr> <td>  <b> Avr- juillet 2012   </b></td><td>  <b> Iash - stage informatique </b> <br> - Developpeur Python-DJANGO  <br> - Gestion base de donnees </td>  </tr>
<tr><td>  <b> Fev - juillet 2013  </b>  </td> <td> <b> Paris Attitude - stage informatique </b> <br> - Developpeur .NET  <br> - Gestion base de donnees </td>   </tr>
</table>
<div>
<br>
<b>EXPERIENCES PROFESSIONNELLES</b><br>
<table cellspacing=\"0\" cellpadding=\"4\" width=\"100%\" STYLE=\" border-style:solid;
border-color:#7aa37a;\">
<tr>  <td> <b> Fev - juillet 2011 </b>  </td> <td>  <b> Converlogic - stage informatique </b>  <br> - Developpeur Java  <br> - Gestion base de donnees </td>  </tr>
<tr> <td>  <b> Avr- juillet 2012   </b></td><td>  <b> Iash - stage informatique </b> <br> - Developpeur Python-DJANGO  <br> - Gestion base de donnees </td>  </tr>
<tr><td>  <b> Fev - juillet 2013  </b>  </td> <td> <b> Paris Attitude - stage informatique </b> <br> - Developpeur .NET  <br> - Gestion base de donnees </td>   </tr>
</table>
</div>

<div>
<br>
<b>Centre d'interet </b><br>
<table  cellspacing=\"0\" cellpadding=\"4\" width=\"100%\"STYLE=\" border-style:solid;
border-color:#7aa37a;\">
<tr>  <td>  <b> Sport </b> </td> <td>  Foot Ball, natation, equitation</td>  </tr>
<tr> <td>  <b>  Musique </b> </td><td>Guittar, percussion </td>   </tr>

</table>
</div>
";
    }

    public function getTemplateName()
    {
        return "GripliCvBundle:Default:cv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 11,  29 => 6,  25 => 5,  19 => 1,);
    }
}
