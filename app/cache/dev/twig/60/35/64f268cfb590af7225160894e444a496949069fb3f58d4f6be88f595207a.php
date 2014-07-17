<?php

/* GripliAuthBundle::layout.html.twig */
class __TwigTemplate_603564f268cfb590af7225160894e444a496949069fb3f58d4f6be88f595207a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'meta_title' => array($this, 'block_meta_title'),
            'body' => array($this, 'block_body'),
            'h2' => array($this, 'block_h2'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html xmlns:fb=\"http://www.facebook.com/2008/fbml\">   
<head>
    <script>
    function goLogIn(){
        window.location.href = \"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("_fb_login_check");
        echo "\";
    }

    function onFbInit() {
        if (typeof(FB) != 'undefined' && FB != null ) {              
            FB.Event.subscribe('auth.statusChange', function(response) {
                if (response.session || response.authResponse) {
                    setTimeout(goLogIn, 500);
                } else {
                    window.location.href = \"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("_fb_logout");
        echo "\";
                }
            });
        }
    }
</script>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>";
        // line 22
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
";
        // line 25
        $this->displayBlock('meta_title', $context, $blocks);
        // line 26
        echo "</head>
<body>
  ";
        // line 28
        echo $this->env->getExtension('facebook')->renderInitialize(array("xfbml" => true, "culture" => "fr_FR", "fbAsyncInit" => "onFbInit();"));
        echo "
";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "
</body>
</html>
";
    }

    // line 22
    public function block_title($context, array $blocks = array())
    {
        echo "Check Email";
    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/greplicheckemail/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />";
    }

    // line 25
    public function block_meta_title($context, array $blocks = array())
    {
        echo " <meta name=\"viewport\" content=\"width=device-width\"> ";
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        echo "  
<h1>";
        // line 30
        $this->displayBlock('h2', $context, $blocks);
        echo "</h1>

<div id=\"wrap\">
";
        // line 33
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 34
            echo "    <h3> Bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "getToken", array(), "method"), "getUser", array(), "method"), "html", null, true);
            echo " </h3>
";
        } else {
            // line 36
            echo "   <h3> Bonjour Anonymous </h3>
";
        }
        // line 37
        echo "\t
\t";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "
</div>

<p class=\"mentions\">Page ";
        // line 47
        $this->displayBlock("title", $context, $blocks);
        echo "</a></p>

";
    }

    // line 30
    public function block_h2($context, array $blocks = array())
    {
        echo " Kapstages ";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        // line 39
        echo "<div>
            ";
        // line 40
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 42
        echo "</div>
";
    }

    // line 40
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 41
        echo "            ";
    }

    public function getTemplateName()
    {
        return "GripliAuthBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 41,  164 => 40,  159 => 42,  157 => 40,  154 => 39,  151 => 38,  145 => 30,  138 => 47,  133 => 44,  131 => 38,  128 => 37,  124 => 36,  118 => 34,  116 => 33,  110 => 30,  105 => 29,  99 => 25,  91 => 23,  85 => 22,  78 => 50,  76 => 29,  72 => 28,  68 => 26,  59 => 23,  55 => 22,  45 => 15,  26 => 1,  83 => 24,  74 => 21,  70 => 20,  66 => 25,  61 => 24,  57 => 17,  46 => 8,  43 => 7,  37 => 4,  33 => 6,  30 => 2,);
    }
}
