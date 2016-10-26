<?php

/* TwigBundle:Exception:error500.html.twig */
class __TwigTemplate_562bdb9e9df4a0286c8891ae24c7b780ebd95c9c0440d850e07d11a420705637 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPUserBundle::layout.html.twig", "TwigBundle:Exception:error500.html.twig", 1);
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
        $__internal_49fab04e51ae1d9c6b3d1e605cb67fe5288ef4193937776bf62514186e66ae3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49fab04e51ae1d9c6b3d1e605cb67fe5288ef4193937776bf62514186e66ae3f->enter($__internal_49fab04e51ae1d9c6b3d1e605cb67fe5288ef4193937776bf62514186e66ae3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error500.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49fab04e51ae1d9c6b3d1e605cb67fe5288ef4193937776bf62514186e66ae3f->leave($__internal_49fab04e51ae1d9c6b3d1e605cb67fe5288ef4193937776bf62514186e66ae3f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_912e7fd1a21d1dd5044644e5d70a27adb32985e256e5a212b3b9e54f5e8c6ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912e7fd1a21d1dd5044644e5d70a27adb32985e256e5a212b3b9e54f5e8c6ed2->enter($__internal_912e7fd1a21d1dd5044644e5d70a27adb32985e256e5a212b3b9e54f5e8c6ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    500 - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_912e7fd1a21d1dd5044644e5d70a27adb32985e256e5a212b3b9e54f5e8c6ed2->leave($__internal_912e7fd1a21d1dd5044644e5d70a27adb32985e256e5a212b3b9e54f5e8c6ed2_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a70e4192653f29d79d95841b4f7939eeedafa8bbc838d1d339a22fb80074d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a70e4192653f29d79d95841b4f7939eeedafa8bbc838d1d339a22fb80074d2b->enter($__internal_2a70e4192653f29d79d95841b4f7939eeedafa8bbc838d1d339a22fb80074d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "
    <div class=\"content-wrapper\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-md-offset-4\">
                    <h1>Oups erreur 500 !!! <small> Une erreur est survenue sur le serveur !!!</small></h1>
                </div>
            </div>

        </div>

    </div>

";
        
        $__internal_2a70e4192653f29d79d95841b4f7939eeedafa8bbc838d1d339a22fb80074d2b->leave($__internal_2a70e4192653f29d79d95841b4f7939eeedafa8bbc838d1d339a22fb80074d2b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error500.html.twig";
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
    500 - {{ parent() }}
{% endblock %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}

    <div class=\"content-wrapper\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-md-offset-4\">
                    <h1>Oups erreur 500 !!! <small> Une erreur est survenue sur le serveur !!!</small></h1>
                </div>
            </div>

        </div>

    </div>

{% endblock fos_user_content %}";
    }
}
