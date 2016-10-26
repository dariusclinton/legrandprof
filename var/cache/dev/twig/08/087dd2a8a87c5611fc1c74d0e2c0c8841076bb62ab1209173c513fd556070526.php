<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_479c29601e046e45e8b6075419947f78d1a36461de65affc4a47341f25079b99 extends Twig_Template
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
        $__internal_8ac08e66a135f1198ae8e137d17e0e7321ee82765933bd776f890dab05b1a2c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac08e66a135f1198ae8e137d17e0e7321ee82765933bd776f890dab05b1a2c7->enter($__internal_8ac08e66a135f1198ae8e137d17e0e7321ee82765933bd776f890dab05b1a2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "<div class=\"breadcrumb-wrapper bg-light-2\">

    <div class=\"container\">

      <ol class=\"breadcrumb-list booking-step\">
        <li><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_core_homepage");
        echo "\">Accueil</a></li>
        <li><span>Mot de passe oublié</span></li>
      </ol>

    </div>

</div>
<div class=\"content-wrapper\">
    <div class='row'>
        <div class='col-md-4 col-md-offset-4'>
            <center>
                <form action=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
                    <div>
                        ";
        // line 20
        if (array_key_exists("invalid_username", $context)) {
            // line 21
            echo "                            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
                        ";
        }
        // line 23
        echo "                        <input type=\"text\" id=\"username\" name=\"username\" class='form-control' required=\"required\" placeholder='Entrez votre Email'/>
                    </div><br>
                    <div>
                        <input type=\"submit\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class='btn btn-primary' />
                    </div>
                </form>
            </center>
        </div>
    </div>
</div>
";
        
        $__internal_8ac08e66a135f1198ae8e137d17e0e7321ee82765933bd776f890dab05b1a2c7->leave($__internal_8ac08e66a135f1198ae8e137d17e0e7321ee82765933bd776f890dab05b1a2c7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 26,  56 => 23,  50 => 21,  48 => 20,  43 => 18,  29 => 7,  22 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}
<div class=\"breadcrumb-wrapper bg-light-2\">

    <div class=\"container\">

      <ol class=\"breadcrumb-list booking-step\">
        <li><a href=\"{{ path('lgp_core_homepage') }}\">Accueil</a></li>
        <li><span>Mot de passe oublié</span></li>
      </ol>

    </div>

</div>
<div class=\"content-wrapper\">
    <div class='row'>
        <div class='col-md-4 col-md-offset-4'>
            <center>
                <form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
                    <div>
                        {% if invalid_username is defined %}
                            <p>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}) }}</p>
                        {% endif %}
                        <input type=\"text\" id=\"username\" name=\"username\" class='form-control' required=\"required\" placeholder='Entrez votre Email'/>
                    </div><br>
                    <div>
                        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" class='btn btn-primary' />
                    </div>
                </form>
            </center>
        </div>
    </div>
</div>
";
    }
}
