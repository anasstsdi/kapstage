<?php

/* GripliCvBundle:Default:index.html.twig */
class __TwigTemplate_46aca3914c8faf5a093242a6b5c94bcd4c6112ac95bdb9010cc4bab6e595fca2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 5
        echo "<h3><a id=\"pdf\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gripli_cv_default_getpdf", array("id" => $this->getAttribute((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")), "getId"))), "html", null, true);
        echo "\" >Download PDF</a></h3>
";
        // line 6
        $this->env->loadTemplate("GripliCvBundle:Default:cv.html.twig")->display($context);
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/griplicv/css/resume.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    public function getTemplateName()
    {
        return "GripliCvBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 3,  34 => 2,  30 => 6,  25 => 5,  23 => 2,  20 => 1,);
    }
}
