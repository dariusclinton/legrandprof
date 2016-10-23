<?php

/* TwigBundle:Exception:error500.html.twig */
class __TwigTemplate_5ce959437e37e2ba87189146ae6d70fe0c052ba71118e3ad6e87d3574a84278a extends Twig_Template
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
        $__internal_32d32f59ef452b7629ee03214c8e4213de29709a915d04b81dba48e8854a87f8 = $this->env->getExtension("native_profiler");
        $__internal_32d32f59ef452b7629ee03214c8e4213de29709a915d04b81dba48e8854a87f8->enter($__internal_32d32f59ef452b7629ee03214c8e4213de29709a915d04b81dba48e8854a87f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error500.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32d32f59ef452b7629ee03214c8e4213de29709a915d04b81dba48e8854a87f8->leave($__internal_32d32f59ef452b7629ee03214c8e4213de29709a915d04b81dba48e8854a87f8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7917c098bee4a1862bde01a3f96a423fde7843753493265a1d066644062cc62 = $this->env->getExtension("native_profiler");
        $__internal_c7917c098bee4a1862bde01a3f96a423fde7843753493265a1d066644062cc62->enter($__internal_c7917c098bee4a1862bde01a3f96a423fde7843753493265a1d066644062cc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Login - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c7917c098bee4a1862bde01a3f96a423fde7843753493265a1d066644062cc62->leave($__internal_c7917c098bee4a1862bde01a3f96a423fde7843753493265a1d066644062cc62_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b58b88e04943b18ae640ea331fc2d7ecaebe099d47246fa0554505b0a30805d5 = $this->env->getExtension("native_profiler");
        $__internal_b58b88e04943b18ae640ea331fc2d7ecaebe099d47246fa0554505b0a30805d5->enter($__internal_b58b88e04943b18ae640ea331fc2d7ecaebe099d47246fa0554505b0a30805d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_b58b88e04943b18ae640ea331fc2d7ecaebe099d47246fa0554505b0a30805d5->leave($__internal_b58b88e04943b18ae640ea331fc2d7ecaebe099d47246fa0554505b0a30805d5_prof);

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
    Login - {{ parent() }}
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
