<?php

/* LGPCoreBundle::layout.html.twig */
class __TwigTemplate_d8476ffaff311cac05480954028647d69a878986b7f77f43ea02fe43d90920dc extends Twig_Template
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
        $__internal_a841617fcbf4cb7e1cf47ac2ff3391361501670697522ccd9e4e3f418fda8001 = $this->env->getExtension("native_profiler");
        $__internal_a841617fcbf4cb7e1cf47ac2ff3391361501670697522ccd9e4e3f418fda8001->enter($__internal_a841617fcbf4cb7e1cf47ac2ff3391361501670697522ccd9e4e3f418fda8001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a841617fcbf4cb7e1cf47ac2ff3391361501670697522ccd9e4e3f418fda8001->leave($__internal_a841617fcbf4cb7e1cf47ac2ff3391361501670697522ccd9e4e3f418fda8001_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_637697061c5c92ecff87295af2d1e2acfeb06d238e698cdfa35b6ccb2e5f4971 = $this->env->getExtension("native_profiler");
        $__internal_637697061c5c92ecff87295af2d1e2acfeb06d238e698cdfa35b6ccb2e5f4971->enter($__internal_637697061c5c92ecff87295af2d1e2acfeb06d238e698cdfa35b6ccb2e5f4971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_637697061c5c92ecff87295af2d1e2acfeb06d238e698cdfa35b6ccb2e5f4971->leave($__internal_637697061c5c92ecff87295af2d1e2acfeb06d238e698cdfa35b6ccb2e5f4971_prof);

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
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
