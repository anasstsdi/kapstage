<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_902d09905fa0f6d6e510dec848a4ccc1af01e7742543598730465fe7e605e3fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<th>";
        // line 12
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>
";
    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label"), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain")), "method"), "html", null, true);
    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "safe")) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  399 => 158,  396 => 157,  394 => 156,  387 => 152,  383 => 150,  377 => 147,  371 => 144,  366 => 142,  362 => 141,  359 => 140,  357 => 139,  352 => 138,  345 => 135,  342 => 133,  335 => 129,  329 => 126,  325 => 125,  321 => 124,  308 => 118,  294 => 111,  289 => 109,  283 => 106,  276 => 102,  270 => 100,  267 => 98,  260 => 94,  249 => 89,  245 => 88,  239 => 86,  237 => 85,  234 => 84,  218 => 77,  214 => 75,  202 => 73,  191 => 69,  188 => 68,  185 => 65,  177 => 63,  170 => 61,  155 => 55,  90 => 34,  194 => 88,  181 => 80,  175 => 77,  169 => 74,  161 => 71,  148 => 53,  137 => 59,  701 => 418,  692 => 412,  687 => 409,  685 => 405,  675 => 402,  670 => 400,  665 => 398,  661 => 396,  654 => 389,  650 => 388,  644 => 385,  640 => 384,  634 => 381,  624 => 374,  616 => 369,  606 => 362,  599 => 358,  592 => 354,  588 => 352,  586 => 349,  584 => 348,  578 => 345,  568 => 338,  561 => 334,  553 => 329,  549 => 327,  542 => 320,  537 => 318,  529 => 315,  525 => 314,  520 => 312,  515 => 310,  503 => 303,  497 => 300,  492 => 298,  485 => 293,  477 => 288,  467 => 281,  463 => 280,  456 => 275,  454 => 269,  450 => 268,  446 => 266,  440 => 263,  435 => 262,  433 => 258,  431 => 257,  426 => 255,  416 => 248,  410 => 245,  398 => 236,  385 => 226,  368 => 212,  363 => 210,  348 => 136,  336 => 189,  332 => 188,  327 => 186,  322 => 184,  313 => 178,  305 => 175,  299 => 174,  292 => 170,  284 => 167,  268 => 157,  258 => 150,  242 => 140,  232 => 83,  213 => 126,  197 => 119,  186 => 83,  152 => 92,  127 => 45,  104 => 67,  100 => 29,  84 => 33,  70 => 17,  23 => 18,  34 => 12,  167 => 60,  128 => 37,  124 => 36,  118 => 34,  110 => 48,  76 => 29,  61 => 24,  114 => 71,  65 => 30,  132 => 58,  97 => 63,  58 => 24,  273 => 101,  269 => 94,  254 => 91,  243 => 88,  240 => 86,  238 => 139,  235 => 83,  230 => 82,  227 => 80,  224 => 79,  221 => 78,  219 => 129,  217 => 75,  208 => 74,  204 => 72,  179 => 107,  159 => 70,  143 => 55,  135 => 81,  119 => 42,  102 => 39,  71 => 22,  67 => 27,  63 => 25,  59 => 23,  87 => 25,  94 => 35,  89 => 40,  85 => 22,  75 => 28,  68 => 31,  56 => 40,  93 => 9,  88 => 60,  78 => 30,  46 => 7,  27 => 4,  44 => 20,  25 => 3,  31 => 16,  201 => 92,  196 => 71,  183 => 82,  171 => 102,  166 => 100,  163 => 62,  158 => 67,  156 => 93,  151 => 38,  142 => 50,  138 => 47,  136 => 48,  121 => 53,  117 => 41,  105 => 47,  91 => 26,  62 => 29,  49 => 20,  21 => 11,  28 => 13,  38 => 32,  26 => 13,  24 => 12,  19 => 11,  79 => 20,  72 => 27,  69 => 50,  47 => 19,  40 => 13,  37 => 10,  22 => 12,  246 => 90,  157 => 40,  145 => 30,  139 => 49,  131 => 38,  123 => 47,  120 => 39,  115 => 50,  111 => 34,  108 => 36,  101 => 28,  98 => 44,  96 => 31,  83 => 25,  74 => 34,  66 => 16,  55 => 23,  52 => 21,  50 => 20,  43 => 18,  41 => 19,  35 => 16,  32 => 15,  29 => 21,  209 => 82,  203 => 122,  199 => 71,  193 => 70,  189 => 71,  187 => 84,  182 => 64,  176 => 64,  173 => 62,  168 => 72,  164 => 72,  162 => 57,  154 => 67,  149 => 51,  147 => 90,  144 => 49,  141 => 48,  133 => 44,  130 => 46,  125 => 44,  122 => 37,  116 => 33,  112 => 42,  109 => 69,  106 => 40,  103 => 46,  99 => 38,  95 => 37,  92 => 61,  86 => 30,  82 => 28,  80 => 19,  73 => 29,  64 => 26,  60 => 25,  57 => 22,  54 => 9,  51 => 38,  48 => 7,  45 => 19,  42 => 9,  39 => 17,  36 => 18,  33 => 4,  30 => 15,);
    }
}
