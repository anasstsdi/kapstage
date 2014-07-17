<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_5c03c606e681d44b2810b38076ca9371b57b8d53a9fff3f63e70441b320619cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GripliAuthBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'h2' => array($this, 'block_h2'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GripliAuthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Espace utilisateur";
    }

    // line 4
    public function block_h2($context, array $blocks = array())
    {
        echo "Espace privé";
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        $this->env->loadTemplate("GripliAuthBundle:Profile:show_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  42 => 5,  36 => 4,  30 => 3,);
    }
}
