<?php

/* GripliCheckEmailBundle:Default:index.html.twig */
class __TwigTemplate_2c20397bf4b3608e2dd8c81748f9dce48d72834ae9bea9a731beee35589a806f extends Twig_Template
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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
";
        // line 7
        $this->displayBlock('meta_title', $context, $blocks);
        // line 8
        echo "
<div id=\"fb-root\"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = \"//connect.facebook.net/fr_FR/sdk.js#xfbml=1&appId=646949945373670&version=v2.0\";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


</head>
<body>

";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "</body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Check Email";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/greplicheckemail/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />";
    }

    // line 7
    public function block_meta_title($context, array $blocks = array())
    {
        echo " <meta name=\"viewport\" content=\"width=device-width\"> ";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "  
<h1>Verification d'email</h1>
";
        // line 25
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 26
            echo "   <button onclick=\"location.href='/logout'\" style=\"position:absolute;width:20em;left:62em;top:159px;\">Déconnecter</button>
";
        } else {
            // line 28
            echo "   <button onclick=\"location.href='/login'\" style=\"position:absolute;width:20em;left:62em;top:159px;\">Login</button>
";
        }
        // line 30
        echo "

<div id=\"wrap\">

\t<h2>";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "</h2>
\t
\t<form  METHOD=\"POST\" ACTION=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("email_index");
        echo "\">
\t\t<label for=\"champ1\">Votre adresse e-mail</label>
\t\t<input type=\"email\" name=\"Email\" id=\"champ1\" required>
\t\t<br /><br />
\t\t<button>Vérifier</button>       
        </form><br>
        <div class=\"fb-like\" data-href=\"http://dev.grepli.com/Home\" data-layout=\"standard\" data-action=\"like\" data-show-faces=\"true\" data-share=\"true\"></div>
</div>

<p class=\"mentions\">Page de vérification d'email</a></p>

";
    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "GripliCheckEmailBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 48,  116 => 36,  111 => 34,  105 => 30,  101 => 28,  97 => 26,  95 => 25,  91 => 23,  88 => 22,  82 => 7,  74 => 5,  68 => 4,  62 => 49,  60 => 48,  58 => 22,  42 => 8,  40 => 7,  35 => 6,  33 => 5,  29 => 4,  24 => 1,);
    }
}
