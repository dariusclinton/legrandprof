<?php

/* @LGPUser/layout.html.twig */
class __TwigTemplate_121d417e80f449987b96c0694b6c3f8454776af0ec9692c329704d319b061a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/layout.html.twig", 1);
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
        $__internal_d6a971db94c877baf4837c875d5f254f1df0c221dfc5d9e4690f044c31cc08c0 = $this->env->getExtension("native_profiler");
        $__internal_d6a971db94c877baf4837c875d5f254f1df0c221dfc5d9e4690f044c31cc08c0->enter($__internal_d6a971db94c877baf4837c875d5f254f1df0c221dfc5d9e4690f044c31cc08c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6a971db94c877baf4837c875d5f254f1df0c221dfc5d9e4690f044c31cc08c0->leave($__internal_d6a971db94c877baf4837c875d5f254f1df0c221dfc5d9e4690f044c31cc08c0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf614c92697394e8fdadcf4408d51509edd16b7da55287e580ea02b53469b6c3 = $this->env->getExtension("native_profiler");
        $__internal_bf614c92697394e8fdadcf4408d51509edd16b7da55287e580ea02b53469b6c3->enter($__internal_bf614c92697394e8fdadcf4408d51509edd16b7da55287e580ea02b53469b6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_bf614c92697394e8fdadcf4408d51509edd16b7da55287e580ea02b53469b6c3->leave($__internal_bf614c92697394e8fdadcf4408d51509edd16b7da55287e580ea02b53469b6c3_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cb1a84aa788b5656b93b7771c7b92973c8d678fa517c69d159371da8e87bb5c7 = $this->env->getExtension("native_profiler");
        $__internal_cb1a84aa788b5656b93b7771c7b92973c8d678fa517c69d159371da8e87bb5c7->enter($__internal_cb1a84aa788b5656b93b7771c7b92973c8d678fa517c69d159371da8e87bb5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_cb1a84aa788b5656b93b7771c7b92973c8d678fa517c69d159371da8e87bb5c7->leave($__internal_cb1a84aa788b5656b93b7771c7b92973c8d678fa517c69d159371da8e87bb5c7_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 7,  55 => 6,  47 => 9,  44 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'LGPCoreBundle::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On definit ce block, dans lequel vont venir s'inserer les autres vues du bundle #}*/
/*   {% block fos_user_content %}*/
/* */
/*   {% endblock fos_user_content %}*/
/* */
/* {% endblock %}*/
/* */
