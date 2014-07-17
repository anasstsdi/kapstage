<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_3f17a1159564911f7f57e7e9bf1d391e761a6863607b3edffcc41a4ea5fcbace extends Twig_Template
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
        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 41,  128 => 37,  124 => 36,  118 => 34,  110 => 30,  76 => 29,  61 => 24,  114 => 37,  65 => 18,  132 => 48,  97 => 36,  58 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 83,  230 => 82,  227 => 81,  224 => 79,  221 => 77,  219 => 76,  217 => 75,  208 => 73,  204 => 72,  179 => 69,  159 => 42,  143 => 55,  135 => 53,  119 => 42,  102 => 32,  71 => 22,  67 => 17,  63 => 15,  59 => 23,  87 => 25,  94 => 35,  89 => 20,  85 => 22,  75 => 17,  68 => 26,  56 => 9,  93 => 9,  88 => 31,  78 => 50,  46 => 7,  27 => 4,  44 => 8,  25 => 3,  31 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 64,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 38,  142 => 59,  138 => 47,  136 => 56,  121 => 46,  117 => 44,  105 => 29,  91 => 23,  62 => 17,  49 => 19,  21 => 2,  28 => 4,  38 => 13,  26 => 1,  24 => 1,  19 => 2,  79 => 27,  72 => 28,  69 => 25,  47 => 9,  40 => 7,  37 => 10,  22 => 3,  246 => 90,  157 => 40,  145 => 30,  139 => 45,  131 => 38,  123 => 47,  120 => 39,  115 => 43,  111 => 34,  108 => 36,  101 => 28,  98 => 40,  96 => 31,  83 => 25,  74 => 5,  66 => 25,  55 => 22,  52 => 21,  50 => 10,  43 => 8,  41 => 9,  35 => 6,  32 => 6,  29 => 4,  209 => 82,  203 => 78,  199 => 71,  193 => 73,  189 => 71,  187 => 84,  182 => 70,  176 => 64,  173 => 65,  168 => 72,  164 => 40,  162 => 57,  154 => 39,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 44,  130 => 41,  125 => 38,  122 => 37,  116 => 33,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 25,  95 => 25,  92 => 21,  86 => 30,  82 => 28,  80 => 19,  73 => 19,  64 => 17,  60 => 48,  57 => 14,  54 => 12,  51 => 11,  48 => 13,  45 => 15,  42 => 8,  39 => 6,  36 => 5,  33 => 6,  30 => 3,);
    }
}
