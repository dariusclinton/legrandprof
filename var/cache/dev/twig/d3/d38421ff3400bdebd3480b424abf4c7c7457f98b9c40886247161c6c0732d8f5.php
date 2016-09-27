<?php

/* LGPCoreBundle::layout.html.twig */
class __TwigTemplate_00e3784b1d0351a3c64d5ea4c57ebfd277a7a03e6bd1b9a37d34ec84d923836a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "LGPCoreBundle::layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c34afab5bac42e41571b5b1aa3317b04d135f92e62531815904c20a2bbf31da = $this->env->getExtension("native_profiler");
        $__internal_0c34afab5bac42e41571b5b1aa3317b04d135f92e62531815904c20a2bbf31da->enter($__internal_0c34afab5bac42e41571b5b1aa3317b04d135f92e62531815904c20a2bbf31da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c34afab5bac42e41571b5b1aa3317b04d135f92e62531815904c20a2bbf31da->leave($__internal_0c34afab5bac42e41571b5b1aa3317b04d135f92e62531815904c20a2bbf31da_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_3115beecf57ac2c80f944256d47cfb3f200f3fc5470edf2e995f3d84fe0878fb = $this->env->getExtension("native_profiler");
        $__internal_3115beecf57ac2c80f944256d47cfb3f200f3fc5470edf2e995f3d84fe0878fb->enter($__internal_3115beecf57ac2c80f944256d47cfb3f200f3fc5470edf2e995f3d84fe0878fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_3115beecf57ac2c80f944256d47cfb3f200f3fc5470edf2e995f3d84fe0878fb->leave($__internal_3115beecf57ac2c80f944256d47cfb3f200f3fc5470edf2e995f3d84fe0878fb_prof);

    }

    public function getTemplateName()
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends \"::layout.html.twig\" %}

{% block body %}



{% endblock %}
";
    }
}
