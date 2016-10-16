<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_3aecda771b3ec8f72d747a96db6cdc44398304f9cb5db475566ed21f51ea1fa5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPUserBundle::layout.html.twig", "TwigBundle:Exception:error404.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_991ccd0a8e339f2d9c901a42da76dc630533e2c5791a97aac2ad675328ea938b = $this->env->getExtension("native_profiler");
        $__internal_991ccd0a8e339f2d9c901a42da76dc630533e2c5791a97aac2ad675328ea938b->enter($__internal_991ccd0a8e339f2d9c901a42da76dc630533e2c5791a97aac2ad675328ea938b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_991ccd0a8e339f2d9c901a42da76dc630533e2c5791a97aac2ad675328ea938b->leave($__internal_991ccd0a8e339f2d9c901a42da76dc630533e2c5791a97aac2ad675328ea938b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae123f7fd864993106478f18adbf55881ec40029168b636b2dad32bdee9e34dc = $this->env->getExtension("native_profiler");
        $__internal_ae123f7fd864993106478f18adbf55881ec40029168b636b2dad32bdee9e34dc->enter($__internal_ae123f7fd864993106478f18adbf55881ec40029168b636b2dad32bdee9e34dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Login - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ae123f7fd864993106478f18adbf55881ec40029168b636b2dad32bdee9e34dc->leave($__internal_ae123f7fd864993106478f18adbf55881ec40029168b636b2dad32bdee9e34dc_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db01ce7d3b3d241a0cdad5ddec2647f77eb2f5b4fbbe88e19e77949c17014b5d = $this->env->getExtension("native_profiler");
        $__internal_db01ce7d3b3d241a0cdad5ddec2647f77eb2f5b4fbbe88e19e77949c17014b5d->enter($__internal_db01ce7d3b3d241a0cdad5ddec2647f77eb2f5b4fbbe88e19e77949c17014b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "
    <div class=\"content-wrapper\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-md-offset-4\">
                    <h1>Oups erreur 404 !!! <small>La page demandée est introuvable !!!</small></h1>
                </div>
            </div>

        </div>

    </div>

";
        
        $__internal_db01ce7d3b3d241a0cdad5ddec2647f77eb2f5b4fbbe88e19e77949c17014b5d->leave($__internal_db01ce7d3b3d241a0cdad5ddec2647f77eb2f5b4fbbe88e19e77949c17014b5d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  51 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'LGPUserBundle::layout.html.twig' %}

{% block title %}
    Login - {{ parent() }}
{% endblock %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}

    <div class=\"content-wrapper\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-md-offset-4\">
                    <h1>Oups erreur 404 !!! <small>La page demandée est introuvable !!!</small></h1>
                </div>
            </div>

        </div>

    </div>

{% endblock fos_user_content %}";
    }
}
