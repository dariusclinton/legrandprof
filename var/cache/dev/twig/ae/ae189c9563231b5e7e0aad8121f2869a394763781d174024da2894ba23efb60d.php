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
        $__internal_79e707ab3ae5c0cdda97a3e8f49a9b0248984cccbc533114ec9053682d59bb71 = $this->env->getExtension("native_profiler");
        $__internal_79e707ab3ae5c0cdda97a3e8f49a9b0248984cccbc533114ec9053682d59bb71->enter($__internal_79e707ab3ae5c0cdda97a3e8f49a9b0248984cccbc533114ec9053682d59bb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79e707ab3ae5c0cdda97a3e8f49a9b0248984cccbc533114ec9053682d59bb71->leave($__internal_79e707ab3ae5c0cdda97a3e8f49a9b0248984cccbc533114ec9053682d59bb71_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4b58b4879268d950a57db3265c4a9cb7c80a4e6be24f7155224a1c001e45a64 = $this->env->getExtension("native_profiler");
        $__internal_d4b58b4879268d950a57db3265c4a9cb7c80a4e6be24f7155224a1c001e45a64->enter($__internal_d4b58b4879268d950a57db3265c4a9cb7c80a4e6be24f7155224a1c001e45a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_d4b58b4879268d950a57db3265c4a9cb7c80a4e6be24f7155224a1c001e45a64->leave($__internal_d4b58b4879268d950a57db3265c4a9cb7c80a4e6be24f7155224a1c001e45a64_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9831191d5fa60952f4a814d779432173177e4922dddfa9ba86e0df5faf67a0c4 = $this->env->getExtension("native_profiler");
        $__internal_9831191d5fa60952f4a814d779432173177e4922dddfa9ba86e0df5faf67a0c4->enter($__internal_9831191d5fa60952f4a814d779432173177e4922dddfa9ba86e0df5faf67a0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_9831191d5fa60952f4a814d779432173177e4922dddfa9ba86e0df5faf67a0c4->leave($__internal_9831191d5fa60952f4a814d779432173177e4922dddfa9ba86e0df5faf67a0c4_prof);

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
