<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_4ab49bb795b9cf59c836d91c2c3dbbd61afe0342bba06ccaa56bf3d136d119fa extends Twig_Template
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
        $__internal_e5a0f98a90789f309782c88b580ed402217505995e5508bc2809f5bbc3529835 = $this->env->getExtension("native_profiler");
        $__internal_e5a0f98a90789f309782c88b580ed402217505995e5508bc2809f5bbc3529835->enter($__internal_e5a0f98a90789f309782c88b580ed402217505995e5508bc2809f5bbc3529835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5a0f98a90789f309782c88b580ed402217505995e5508bc2809f5bbc3529835->leave($__internal_e5a0f98a90789f309782c88b580ed402217505995e5508bc2809f5bbc3529835_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_65d06f9b03e6d0d1cb7de15c1ff97f461d72c7f749ddbc4d6824c06a5c492450 = $this->env->getExtension("native_profiler");
        $__internal_65d06f9b03e6d0d1cb7de15c1ff97f461d72c7f749ddbc4d6824c06a5c492450->enter($__internal_65d06f9b03e6d0d1cb7de15c1ff97f461d72c7f749ddbc4d6824c06a5c492450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_65d06f9b03e6d0d1cb7de15c1ff97f461d72c7f749ddbc4d6824c06a5c492450->leave($__internal_65d06f9b03e6d0d1cb7de15c1ff97f461d72c7f749ddbc4d6824c06a5c492450_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b9091c82fc2fa27776a1ede6fecfa34ccec6b1925ff1f60a24e347476ef84cbf = $this->env->getExtension("native_profiler");
        $__internal_b9091c82fc2fa27776a1ede6fecfa34ccec6b1925ff1f60a24e347476ef84cbf->enter($__internal_b9091c82fc2fa27776a1ede6fecfa34ccec6b1925ff1f60a24e347476ef84cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_b9091c82fc2fa27776a1ede6fecfa34ccec6b1925ff1f60a24e347476ef84cbf->leave($__internal_b9091c82fc2fa27776a1ede6fecfa34ccec6b1925ff1f60a24e347476ef84cbf_prof);

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
