<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_4ba8f586b97ed534947d6a21634e816a38413ea781561e2ebc41e2c0f07564b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0b3ddbb715fe034b10d35df4f3462b25eac9d6c797065bc5df497030d7e1c20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0b3ddbb715fe034b10d35df4f3462b25eac9d6c797065bc5df497030d7e1c20->enter($__internal_f0b3ddbb715fe034b10d35df4f3462b25eac9d6c797065bc5df497030d7e1c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_f0b3ddbb715fe034b10d35df4f3462b25eac9d6c797065bc5df497030d7e1c20->leave($__internal_f0b3ddbb715fe034b10d35df4f3462b25eac9d6c797065bc5df497030d7e1c20_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_9d9b7daec913c68c7f8443c1dd27443476b4ab5def7f3d622992fd14ec18b6a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d9b7daec913c68c7f8443c1dd27443476b4ab5def7f3d622992fd14ec18b6a4->enter($__internal_9d9b7daec913c68c7f8443c1dd27443476b4ab5def7f3d622992fd14ec18b6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_9d9b7daec913c68c7f8443c1dd27443476b4ab5def7f3d622992fd14ec18b6a4->leave($__internal_9d9b7daec913c68c7f8443c1dd27443476b4ab5def7f3d622992fd14ec18b6a4_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
";
    }
}
