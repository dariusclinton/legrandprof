<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_5bcb574ec7e516fec44f4de43e78e35bbcdd7dcef2a6323048cfaee60d0b7962 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p></div></div>
        </div>
      </div>
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 10,  31 => 6,  28 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
