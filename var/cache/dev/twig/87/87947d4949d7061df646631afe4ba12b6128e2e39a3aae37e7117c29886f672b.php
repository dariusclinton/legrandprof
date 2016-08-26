<?php

/* LGPUserBundle:Avis:add.html.twig */
class __TwigTemplate_6a88d2a2f0a77016e5516f783f6a3d0e21113b81a4b628bea429a33880d89069 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Avis:add.html.twig", 1);
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
        $__internal_74ca359acf170cf90e446c1fdde3ed342c83bb1dfa6ed8e63a7c8f805e42c9bd = $this->env->getExtension("native_profiler");
        $__internal_74ca359acf170cf90e446c1fdde3ed342c83bb1dfa6ed8e63a7c8f805e42c9bd->enter($__internal_74ca359acf170cf90e446c1fdde3ed342c83bb1dfa6ed8e63a7c8f805e42c9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74ca359acf170cf90e446c1fdde3ed342c83bb1dfa6ed8e63a7c8f805e42c9bd->leave($__internal_74ca359acf170cf90e446c1fdde3ed342c83bb1dfa6ed8e63a7c8f805e42c9bd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5514c3e5c5a063bfc0b38c01d43c452c9ced377904a9ff9a0c7dd08a1b1259e4 = $this->env->getExtension("native_profiler");
        $__internal_5514c3e5c5a063bfc0b38c01d43c452c9ced377904a9ff9a0c7dd08a1b1259e4->enter($__internal_5514c3e5c5a063bfc0b38c01d43c452c9ced377904a9ff9a0c7dd08a1b1259e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5514c3e5c5a063bfc0b38c01d43c452c9ced377904a9ff9a0c7dd08a1b1259e4->leave($__internal_5514c3e5c5a063bfc0b38c01d43c452c9ced377904a9ff9a0c7dd08a1b1259e4_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1968d7f86dc72e7ac90ce3c58f45a2af1eda4880a4b3df99cfdfd4f22baa1d9c = $this->env->getExtension("native_profiler");
        $__internal_1968d7f86dc72e7ac90ce3c58f45a2af1eda4880a4b3df99cfdfd4f22baa1d9c->enter($__internal_1968d7f86dc72e7ac90ce3c58f45a2af1eda4880a4b3df99cfdfd4f22baa1d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_1968d7f86dc72e7ac90ce3c58f45a2af1eda4880a4b3df99cfdfd4f22baa1d9c->leave($__internal_1968d7f86dc72e7ac90ce3c58f45a2af1eda4880a4b3df99cfdfd4f22baa1d9c_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:add.html.twig";
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
