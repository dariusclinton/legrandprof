<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_99d21c8dadeb53da9cf16fa2f9c41f6ab5be0f7389f8ad8e27f643c26f2a89c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"bg-grey\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\"><div style=\"padding-bottom:100px;padding-top:100px\"><p class=\"text-center alert-success\" style=\"padding:20px;\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
            ";
        // line 11
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : null)) {
            // line 12
            echo "            <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
            </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 12,  41 => 11,  37 => 10,  31 => 6,  28 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
