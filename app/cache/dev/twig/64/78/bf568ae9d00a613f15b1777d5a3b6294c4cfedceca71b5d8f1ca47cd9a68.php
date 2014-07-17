<?php

/* GripliAuthBundle:Profile:show_content.html.twig */
class __TwigTemplate_6478bf568ae9d00a613f15b1777d5a3b6294c4cfedceca71b5d8f1ca47cd9a68 extends Twig_Template
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
        echo "<button type=\"button\" onclick=\"self.location.href='/logout'\" style=\"position:absolute;width:20em;left:62em;top:159px;\">Déconnecter</button>
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</p>
    <p>Nom: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname"), "html", null, true);
        echo "</p>
    <p>Prènom: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname"), "html", null, true);
        echo "</p>
    <button type=\"button\" onclick=\"self.location.href='edit'\">Editer</button>
    <button type=\"button\" onclick=\"self.location.href='/remove'\">Supprimer votre compte</button>
    <button type=\"button\" onclick=\"self.location.href='/Home'\">Home</button>
</div>";
    }

    public function getTemplateName()
    {
        return "GripliAuthBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  35 => 6,  29 => 5,  23 => 4,  19 => 2,  45 => 6,  42 => 5,  36 => 4,  30 => 3,);
    }
}
