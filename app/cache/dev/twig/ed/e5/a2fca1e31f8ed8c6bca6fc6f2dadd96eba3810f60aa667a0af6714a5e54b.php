<?php

/* FOSFacebookBundle::initialize.html.twig */
class __TwigTemplate_ede5a2fca1e31f8ed8c6bca6fc6f2dadd96eba3810f60aa667a0af6714a5e54b extends Twig_Template
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
        echo "<div id=\"fb-root\"></div>
";
        // line 2
        if ((!(isset($context["async"]) ? $context["async"] : $this->getContext($context, "async")))) {
            // line 3
            echo "<script type=\"text/javascript\" src=\"http://connect.facebook.net/";
            echo twig_escape_filter($this->env, (isset($context["culture"]) ? $context["culture"] : $this->getContext($context, "culture")), "html", null, true);
            echo "/all.js\"></script>
";
        }
        // line 5
        echo "<script type=\"text/javascript\">
";
        // line 7
        if ((isset($context["async"]) ? $context["async"] : $this->getContext($context, "async"))) {
            // line 8
            echo "window.fbAsyncInit = function() {
";
        }
        // line 10
        echo "  FB.init(";
        echo twig_jsonencode_filter(array("appId" => (isset($context["appId"]) ? $context["appId"] : $this->getContext($context, "appId")), "xfbml" => (isset($context["xfbml"]) ? $context["xfbml"] : $this->getContext($context, "xfbml")), "oauth" => (isset($context["oauth"]) ? $context["oauth"] : $this->getContext($context, "oauth")), "status" => (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "cookie" => (isset($context["cookie"]) ? $context["cookie"] : $this->getContext($context, "cookie")), "logging" => (isset($context["logging"]) ? $context["logging"] : $this->getContext($context, "logging")), "channelUrl" => (isset($context["channelUrl"]) ? $context["channelUrl"] : $this->getContext($context, "channelUrl"))));
        echo ");
";
        // line 11
        if ((isset($context["async"]) ? $context["async"] : $this->getContext($context, "async"))) {
            // line 12
            echo "  ";
            echo (isset($context["fbAsyncInit"]) ? $context["fbAsyncInit"] : $this->getContext($context, "fbAsyncInit"));
            echo "
};

(function() {
  var e = document.createElement('script');
  e.src = document.location.protocol + ";
            // line 17
            echo twig_jsonencode_filter(sprintf("//connect.facebook.net/%s/all.js", (isset($context["culture"]) ? $context["culture"] : $this->getContext($context, "culture"))));
            echo ";
  e.async = true;
  document.getElementById('fb-root').appendChild(e);
}());
";
        }
        // line 23
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "FOSFacebookBundle::initialize.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 23,  44 => 11,  39 => 10,  35 => 8,  24 => 3,  22 => 2,  19 => 1,  167 => 41,  164 => 40,  159 => 42,  157 => 40,  154 => 39,  151 => 38,  145 => 30,  138 => 47,  133 => 44,  131 => 38,  128 => 37,  124 => 36,  118 => 34,  116 => 33,  110 => 30,  105 => 29,  99 => 25,  91 => 23,  85 => 22,  78 => 50,  76 => 29,  72 => 28,  68 => 26,  59 => 23,  55 => 17,  45 => 15,  26 => 1,  83 => 24,  74 => 21,  70 => 20,  66 => 25,  61 => 24,  57 => 17,  46 => 12,  43 => 7,  37 => 4,  33 => 7,  30 => 5,);
    }
}
