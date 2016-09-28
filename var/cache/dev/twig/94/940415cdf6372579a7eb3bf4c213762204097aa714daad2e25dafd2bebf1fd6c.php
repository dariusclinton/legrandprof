<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_ee86c1b812daa1b8919bc96f64bd46b59ee60439d571371340153864df40814b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11606ea0464431ec4061d5b0713d2bafaefc8205d9f28fec2e237e7d950489a2 = $this->env->getExtension("native_profiler");
        $__internal_11606ea0464431ec4061d5b0713d2bafaefc8205d9f28fec2e237e7d950489a2->enter($__internal_11606ea0464431ec4061d5b0713d2bafaefc8205d9f28fec2e237e7d950489a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11606ea0464431ec4061d5b0713d2bafaefc8205d9f28fec2e237e7d950489a2->leave($__internal_11606ea0464431ec4061d5b0713d2bafaefc8205d9f28fec2e237e7d950489a2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb0ae0269c0a20aa9fa917201708570e3856f59516b6ba7bcf00fc4ea7315d4c = $this->env->getExtension("native_profiler");
        $__internal_fb0ae0269c0a20aa9fa917201708570e3856f59516b6ba7bcf00fc4ea7315d4c->enter($__internal_fb0ae0269c0a20aa9fa917201708570e3856f59516b6ba7bcf00fc4ea7315d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_fb0ae0269c0a20aa9fa917201708570e3856f59516b6ba7bcf00fc4ea7315d4c->leave($__internal_fb0ae0269c0a20aa9fa917201708570e3856f59516b6ba7bcf00fc4ea7315d4c_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d936218329bd6ec602b021ffe332ec92cae4cc558107e38ec7278da5fe123071 = $this->env->getExtension("native_profiler");
        $__internal_d936218329bd6ec602b021ffe332ec92cae4cc558107e38ec7278da5fe123071->enter($__internal_d936218329bd6ec602b021ffe332ec92cae4cc558107e38ec7278da5fe123071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_d936218329bd6ec602b021ffe332ec92cae4cc558107e38ec7278da5fe123071->leave($__internal_d936218329bd6ec602b021ffe332ec92cae4cc558107e38ec7278da5fe123071_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 7,  55 => 6,  47 => 9,  44 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'LGPCoreBundle::layout.html.twig' %}

{% block body %}

  {# On definit ce block, dans lequel vont venir s'inserer les autres vues du bundle #}
  {% block fos_user_content %}

  {% endblock fos_user_content %}

{% endblock %}
";
    }
}
