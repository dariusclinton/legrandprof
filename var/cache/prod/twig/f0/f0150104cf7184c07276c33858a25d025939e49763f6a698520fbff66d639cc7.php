<?php

/* LGPUserBundle::layout.html.twig */
class __TwigTemplate_82fae991bc7749b50f88c8fbeb9c11c8313e9ac5bbb721a68f08c21f0656eb18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle::layout.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 7
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "LGPUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  43 => 6,  38 => 9,  35 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
