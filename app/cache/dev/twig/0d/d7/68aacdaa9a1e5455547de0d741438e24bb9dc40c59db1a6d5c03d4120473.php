<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_0dd768aacdaa9a1e5455547de0d741438e24bb9dc40c59db1a6d5c03d4120473 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("FOSUserBundle:Group:edit_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  167 => 41,  128 => 37,  124 => 36,  118 => 34,  110 => 30,  76 => 29,  61 => 24,  114 => 37,  65 => 18,  132 => 48,  97 => 36,  58 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 83,  230 => 82,  227 => 81,  224 => 79,  221 => 77,  219 => 76,  217 => 75,  208 => 73,  204 => 72,  179 => 69,  159 => 42,  143 => 55,  135 => 53,  119 => 42,  102 => 32,  71 => 22,  67 => 17,  63 => 15,  59 => 23,  87 => 25,  94 => 35,  89 => 20,  85 => 22,  75 => 17,  68 => 26,  56 => 9,  93 => 9,  88 => 31,  78 => 50,  46 => 7,  27 => 5,  44 => 8,  25 => 3,  31 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 64,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 38,  142 => 59,  138 => 47,  136 => 56,  121 => 46,  117 => 44,  105 => 29,  91 => 23,  62 => 17,  49 => 19,  21 => 2,  28 => 3,  38 => 13,  26 => 12,  24 => 7,  19 => 2,  79 => 27,  72 => 28,  69 => 25,  47 => 9,  40 => 7,  37 => 10,  22 => 2,  246 => 90,  157 => 40,  145 => 30,  139 => 45,  131 => 38,  123 => 47,  120 => 39,  115 => 43,  111 => 34,  108 => 36,  101 => 28,  98 => 40,  96 => 31,  83 => 25,  74 => 5,  66 => 25,  55 => 22,  52 => 21,  50 => 10,  43 => 12,  41 => 9,  35 => 8,  32 => 6,  29 => 6,  209 => 82,  203 => 78,  199 => 71,  193 => 73,  189 => 71,  187 => 84,  182 => 70,  176 => 64,  173 => 65,  168 => 72,  164 => 40,  162 => 57,  154 => 39,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 44,  130 => 41,  125 => 38,  122 => 37,  116 => 33,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 25,  95 => 25,  92 => 21,  86 => 30,  82 => 28,  80 => 19,  73 => 19,  64 => 17,  60 => 48,  57 => 14,  54 => 12,  51 => 11,  48 => 12,  45 => 15,  42 => 9,  39 => 7,  36 => 5,  33 => 4,  30 => 2,);
    }
}
