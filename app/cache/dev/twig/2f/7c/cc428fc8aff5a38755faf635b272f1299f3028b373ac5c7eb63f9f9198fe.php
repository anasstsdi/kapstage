<?php

/* SonataDoctrineMongoDBAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_2f7ccc428fc8aff5a38755faf635b272f1299f3028b373ac5c7eb63f9f9198fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:Form:form_admin_fields.html.twig");

        $this->blocks = array(
            'sonata_admin_mongo_one_widget' => array($this, 'block_sonata_admin_mongo_one_widget'),
            'sonata_admin_mongo_many_widget' => array($this, 'block_sonata_admin_mongo_many_widget'),
            'sonata_admin_mongo_collection' => array($this, 'block_sonata_admin_mongo_collection'),
            'sonata_type_model_widget' => array($this, 'block_sonata_type_model_widget'),
            'sonata_type_model_list_widget' => array($this, 'block_sonata_type_model_list_widget'),
            'sonata_type_admin_widget' => array($this, 'block_sonata_type_admin_widget'),
            'sonata_type_collection_widget' => array($this, 'block_sonata_type_collection_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_sonata_admin_mongo_one_widget($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineMongoDBAdminBundle:CRUD:edit_mongo_one.html.twig")->display($context);
    }

    // line 21
    public function block_sonata_admin_mongo_many_widget($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineMongoDBAdminBundle:CRUD:edit_mongo_many.html.twig")->display($context);
    }

    // line 25
    public function block_sonata_admin_mongo_collection($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineMongoDBAdminBundle:CRUD:edit_mongo_collection.html.twig")->display($context);
    }

    // line 29
    public function block_sonata_type_model_widget($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        // line 34
        echo "
    ";
        // line 36
        echo "
    ";
        // line 37
        if (twig_test_empty($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"))) {
            // line 38
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype") == "one")) {
            // line 40
            echo "        ";
            $this->displayBlock("sonata_admin_mongo_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype") == "many")) {
            // line 42
            echo "        ";
            $this->displayBlock("sonata_admin_mongo_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 44
            echo "        ";
            // line 45
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        }
    }

    // line 49
    public function block_sonata_type_model_list_widget($context, array $blocks = array())
    {
        // line 50
        echo "    <div id=\"field_container_";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-container\">
        <span id=\"field_actions_";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-actions\">
            <span id=\"field_widget_";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-short-description\">
                ";
        // line 53
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value")), "method")) {
            // line 54
            echo "                    ";
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "code"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "uniqid"))), array());
            // line 60
            echo "                ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "options"), "placeholder"))) {
            // line 61
            echo "                    <span class=\"inner-field-short-description\">
                        ";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "options"), "placeholder"), array(), "SonataAdminBundle"), "html", null, true);
            echo "
                    </span>
                ";
        }
        // line 65
        echo "            </span>

            <span class=\"btn-group\">
                ";
        // line 68
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method")) && (isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")))) {
            // line 69
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\"
                       onclick=\"return start_field_dialog_form_list_";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                       class=\"btn sonata-ba-action\"
                       title=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"icon-list\"></i>
                        ";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 78
        echo "
                ";
        // line 79
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")))) {
            // line 80
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\"
                       onclick=\"return start_field_dialog_form_add_";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                       class=\"btn sonata-ba-action\"
                       title=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"icon-plus\"></i>
                        ";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 89
        echo "            </span>

            <span class=\"btn-group\">
                ";
        // line 92
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasRoute", array(0 => "delete"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "DELETE"), "method")) && (isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")))) {
            // line 93
            echo "                    <a href=\"\"
                       onclick=\"return remove_selected_element_";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                       class=\"btn sonata-ba-action\"
                       title=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"icon-off\"></i>
                        ";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 102
        echo "            </span>
        </span>

        <span style=\"display: none\" >
            ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </span>

        <div class=\"container sonata-ba-modal sonata-ba-modal-edit-one-to-one\" style=\"display: none\" id=\"field_dialog_";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">

        </div>
    </div>

    ";
        // line 114
        $this->env->loadTemplate("SonataDoctrineMongoDBAdminBundle:CRUD:edit_mongo_association_script.html.twig")->display($context);
    }

    // line 117
    public function block_sonata_type_admin_widget($context, array $blocks = array())
    {
        // line 118
        echo "    ";
        // line 119
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype") == "one")) {
            // line 120
            echo "        ";
            $this->displayBlock("sonata_admin_mongo_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype") == "many")) {
            // line 122
            echo "        ";
            $this->displayBlock("sonata_admin_mongo_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 124
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "
    ";
        }
    }

    // line 128
    public function block_sonata_type_collection_widget($context, array $blocks = array())
    {
        // line 129
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype") == "many")) {
            // line 130
            echo "        ";
            $this->displayBlock("sonata_admin_mongo_collection", $context, $blocks);
            echo "
    ";
        } else {
            // line 132
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo " - type : sonata_type_collection - mapping : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype"), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineMongoDBAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 132,  259 => 124,  247 => 120,  244 => 119,  198 => 94,  195 => 93,  107 => 51,  53 => 26,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  683 => 135,  680 => 134,  678 => 133,  666 => 126,  662 => 125,  658 => 124,  649 => 122,  643 => 120,  638 => 118,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  550 => 94,  547 => 93,  527 => 91,  524 => 90,  512 => 84,  509 => 83,  501 => 80,  496 => 79,  493 => 78,  490 => 77,  480 => 75,  478 => 74,  470 => 73,  464 => 71,  461 => 70,  459 => 69,  442 => 62,  437 => 61,  428 => 59,  423 => 57,  414 => 52,  408 => 50,  405 => 49,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  374 => 36,  355 => 27,  350 => 26,  344 => 24,  337 => 22,  316 => 16,  311 => 14,  293 => 6,  290 => 5,  288 => 4,  285 => 3,  281 => 409,  278 => 408,  271 => 374,  266 => 366,  263 => 365,  255 => 353,  253 => 122,  250 => 341,  248 => 336,  225 => 298,  222 => 297,  220 => 290,  215 => 102,  210 => 270,  207 => 269,  126 => 62,  233 => 304,  212 => 279,  200 => 73,  184 => 233,  180 => 66,  174 => 217,  165 => 61,  153 => 55,  146 => 181,  140 => 52,  134 => 161,  129 => 148,  77 => 40,  81 => 40,  399 => 158,  396 => 157,  394 => 156,  387 => 152,  383 => 150,  377 => 37,  371 => 35,  366 => 33,  362 => 141,  359 => 140,  357 => 139,  352 => 138,  345 => 135,  342 => 23,  335 => 21,  329 => 126,  325 => 125,  321 => 124,  308 => 13,  294 => 111,  289 => 109,  283 => 106,  276 => 393,  270 => 129,  267 => 128,  260 => 363,  249 => 89,  245 => 335,  239 => 117,  237 => 85,  234 => 84,  218 => 77,  214 => 75,  202 => 266,  191 => 246,  188 => 89,  185 => 65,  177 => 65,  170 => 61,  155 => 75,  90 => 34,  194 => 248,  181 => 232,  175 => 77,  169 => 210,  161 => 78,  148 => 53,  137 => 68,  701 => 418,  692 => 412,  687 => 409,  685 => 405,  675 => 132,  670 => 400,  665 => 398,  661 => 396,  654 => 123,  650 => 388,  644 => 385,  640 => 119,  634 => 381,  624 => 374,  616 => 369,  606 => 362,  599 => 358,  592 => 354,  588 => 352,  586 => 349,  584 => 348,  578 => 345,  568 => 338,  561 => 334,  553 => 329,  549 => 327,  542 => 320,  537 => 318,  529 => 92,  525 => 314,  520 => 312,  515 => 85,  503 => 81,  497 => 300,  492 => 298,  485 => 293,  477 => 288,  467 => 72,  463 => 280,  456 => 68,  454 => 269,  450 => 64,  446 => 266,  440 => 263,  435 => 262,  433 => 60,  431 => 257,  426 => 58,  416 => 248,  410 => 245,  398 => 236,  385 => 41,  368 => 34,  363 => 32,  348 => 136,  336 => 189,  332 => 20,  327 => 186,  322 => 184,  313 => 15,  305 => 175,  299 => 8,  292 => 170,  284 => 167,  268 => 373,  258 => 354,  242 => 118,  232 => 83,  213 => 126,  197 => 249,  186 => 239,  152 => 92,  127 => 45,  104 => 90,  100 => 42,  84 => 41,  70 => 17,  23 => 18,  34 => 17,  167 => 60,  128 => 37,  124 => 132,  118 => 34,  110 => 48,  76 => 31,  61 => 30,  114 => 111,  65 => 30,  132 => 65,  97 => 63,  58 => 29,  273 => 130,  269 => 94,  254 => 91,  243 => 327,  240 => 326,  238 => 312,  235 => 114,  230 => 303,  227 => 109,  224 => 79,  221 => 106,  219 => 129,  217 => 289,  208 => 74,  204 => 267,  179 => 224,  159 => 196,  143 => 55,  135 => 81,  119 => 117,  102 => 50,  71 => 38,  67 => 55,  63 => 34,  59 => 50,  87 => 25,  94 => 57,  89 => 44,  85 => 22,  75 => 28,  68 => 31,  56 => 40,  93 => 9,  88 => 67,  78 => 30,  46 => 35,  27 => 4,  44 => 20,  25 => 3,  31 => 16,  201 => 92,  196 => 71,  183 => 82,  171 => 81,  166 => 80,  163 => 62,  158 => 67,  156 => 195,  151 => 188,  142 => 50,  138 => 47,  136 => 168,  121 => 131,  117 => 54,  105 => 76,  91 => 45,  62 => 29,  49 => 21,  21 => 11,  28 => 13,  38 => 20,  26 => 20,  24 => 13,  19 => 11,  79 => 32,  72 => 27,  69 => 37,  47 => 19,  40 => 13,  37 => 18,  22 => 12,  246 => 90,  157 => 57,  145 => 30,  139 => 69,  131 => 160,  123 => 61,  120 => 60,  115 => 53,  111 => 52,  108 => 36,  101 => 89,  98 => 44,  96 => 67,  83 => 42,  74 => 20,  66 => 36,  55 => 23,  52 => 22,  50 => 25,  43 => 19,  41 => 19,  35 => 19,  32 => 18,  29 => 14,  209 => 99,  203 => 96,  199 => 265,  193 => 92,  189 => 240,  187 => 69,  182 => 86,  176 => 83,  173 => 62,  168 => 62,  164 => 79,  162 => 60,  154 => 189,  149 => 72,  147 => 90,  144 => 70,  141 => 175,  133 => 44,  130 => 46,  125 => 46,  122 => 37,  116 => 116,  112 => 42,  109 => 105,  106 => 104,  103 => 43,  99 => 49,  95 => 41,  92 => 61,  86 => 46,  82 => 28,  80 => 36,  73 => 32,  64 => 3,  60 => 25,  57 => 24,  54 => 9,  51 => 25,  48 => 24,  45 => 22,  42 => 21,  39 => 18,  36 => 18,  33 => 15,  30 => 15,);
    }
}
