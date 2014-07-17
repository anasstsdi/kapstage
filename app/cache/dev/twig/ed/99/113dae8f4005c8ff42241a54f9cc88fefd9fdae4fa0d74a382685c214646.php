<?php

/* GripliCvBundle:Default:list.html.twig */
class __TwigTemplate_ed99113dae8f4005c8ff42241a54f9cc88fefd9fdae4fa0d74a382685c214646 extends Twig_Template
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "Liste des CV";
    }

    // line 4
    public function block_h2($context, array $blocks = array())
    {
        echo "Liste des CV";
    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 8
        echo "<div>
    <h3><b>Vos CV</b></h3>
<table cellspacing=\"0\" cellpadding=\"4\" width=\"100%\" STYLE=\" border-style:solid;
border-color:#7aa37a;margin-left: 10em;\">
<tr> <td> id </td>
    <td> Titre </td>
      <td> Propriètaire </td>
</tr>

";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cv"]) ? $context["cv"] : $this->getContext($context, "cv")));
        foreach ($context['_seq'] as $context["_key"] => $context["hist"]) {
            // line 18
            echo "<tr> <td> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hist"]) ? $context["hist"] : $this->getContext($context, "hist")), "getId"), "html", null, true);
            echo " </td>
    <td> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hist"]) ? $context["hist"] : $this->getContext($context, "hist")), "getTitle"), "html", null, true);
            echo " </td>
    <td> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["hist"]) ? $context["hist"] : $this->getContext($context, "hist")), "getuser", array(), "method"), "getLastname"), "html", null, true);
            echo " </td>
    <td> <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cv", array("id" => $this->getAttribute((isset($context["hist"]) ? $context["hist"] : $this->getContext($context, "hist")), "getId"))), "html", null, true);
            echo "\" >Voir</a> </td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo " </table>   
   </div> 
";
    }

    public function getTemplateName()
    {
        return "GripliCvBundle:Default:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 24,  74 => 21,  70 => 20,  66 => 19,  61 => 18,  57 => 17,  46 => 8,  43 => 7,  37 => 4,  33 => 3,  30 => 2,);
    }
}
