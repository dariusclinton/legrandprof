<?php

/* LGPUserBundle:Avis:update.html.twig */
class __TwigTemplate_441dc54e3edf3c254a14e708c88678c33b58742741d6c45f5f56afb80f44cdb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Avis:update.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea3152c7b40298bb4c8acbfa810426a70f194398d494d2e447fc3a3b3a3f32f1 = $this->env->getExtension("native_profiler");
        $__internal_ea3152c7b40298bb4c8acbfa810426a70f194398d494d2e447fc3a3b3a3f32f1->enter($__internal_ea3152c7b40298bb4c8acbfa810426a70f194398d494d2e447fc3a3b3a3f32f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea3152c7b40298bb4c8acbfa810426a70f194398d494d2e447fc3a3b3a3f32f1->leave($__internal_ea3152c7b40298bb4c8acbfa810426a70f194398d494d2e447fc3a3b3a3f32f1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc0d64b045ea58c11229f710a042afb42e82c3eb39f1f6402cf0d050d7e5bbd8 = $this->env->getExtension("native_profiler");
        $__internal_fc0d64b045ea58c11229f710a042afb42e82c3eb39f1f6402cf0d050d7e5bbd8->enter($__internal_fc0d64b045ea58c11229f710a042afb42e82c3eb39f1f6402cf0d050d7e5bbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fc0d64b045ea58c11229f710a042afb42e82c3eb39f1f6402cf0d050d7e5bbd8->leave($__internal_fc0d64b045ea58c11229f710a042afb42e82c3eb39f1f6402cf0d050d7e5bbd8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_458ec9016d78c1b894843d963f24ddc812976dce6e580ea26765be12bb5f90b7 = $this->env->getExtension("native_profiler");
        $__internal_458ec9016d78c1b894843d963f24ddc812976dce6e580ea26765be12bb5f90b7->enter($__internal_458ec9016d78c1b894843d963f24ddc812976dce6e580ea26765be12bb5f90b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_458ec9016d78c1b894843d963f24ddc812976dce6e580ea26765be12bb5f90b7->leave($__internal_458ec9016d78c1b894843d963f24ddc812976dce6e580ea26765be12bb5f90b7_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Modification d'un avis - {{ parent() }}
{% endblock %}

{% block body %}
  <h1>Modification d'un avis</h1>

  {% include 'LGPUserBundle:Avis:formulaire.html.twig'%}
  
{% endblock %}";
    }
}
