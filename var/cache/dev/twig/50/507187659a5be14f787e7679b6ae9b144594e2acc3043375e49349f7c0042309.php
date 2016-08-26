<?php

/* @LGPUser/Avis/add.html.twig */
class __TwigTemplate_fd84e8fe955c49d0175413fe6f3a1a5e2d65d06ce8abcfb13436de4a03b25cb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/Avis/add.html.twig", 1);
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
        $__internal_ad4de51646f6485762ae0e566772cf3eb11e9400e63fcf1cf5d0b86fd1a741fc = $this->env->getExtension("native_profiler");
        $__internal_ad4de51646f6485762ae0e566772cf3eb11e9400e63fcf1cf5d0b86fd1a741fc->enter($__internal_ad4de51646f6485762ae0e566772cf3eb11e9400e63fcf1cf5d0b86fd1a741fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Avis/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad4de51646f6485762ae0e566772cf3eb11e9400e63fcf1cf5d0b86fd1a741fc->leave($__internal_ad4de51646f6485762ae0e566772cf3eb11e9400e63fcf1cf5d0b86fd1a741fc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d24925c4ef725f907bc494e56ed2c2532a49127d0a0365275a4bc76432e0fc4f = $this->env->getExtension("native_profiler");
        $__internal_d24925c4ef725f907bc494e56ed2c2532a49127d0a0365275a4bc76432e0fc4f->enter($__internal_d24925c4ef725f907bc494e56ed2c2532a49127d0a0365275a4bc76432e0fc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d24925c4ef725f907bc494e56ed2c2532a49127d0a0365275a4bc76432e0fc4f->leave($__internal_d24925c4ef725f907bc494e56ed2c2532a49127d0a0365275a4bc76432e0fc4f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_79465d9a33ba67af078919cd1abaa38749c900d779c7521c86a2a654f0f07ec7 = $this->env->getExtension("native_profiler");
        $__internal_79465d9a33ba67af078919cd1abaa38749c900d779c7521c86a2a654f0f07ec7->enter($__internal_79465d9a33ba67af078919cd1abaa38749c900d779c7521c86a2a654f0f07ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "@LGPUser/Avis/add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_79465d9a33ba67af078919cd1abaa38749c900d779c7521c86a2a654f0f07ec7->leave($__internal_79465d9a33ba67af078919cd1abaa38749c900d779c7521c86a2a654f0f07ec7_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Avis/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Ajout d'avis - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Ajout d'un avis</h1>*/
/* */
/*   {% include 'LGPUserBundle:Avis:formulaire.html.twig'%}*/
/*   */
/* {% endblock %}*/
