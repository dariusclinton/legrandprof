<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5db31a3c1f0ee2a25a8c779cb47242703dc7e96d3900fde614b3cfd494693cf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49478cdcf16a42525ea81136d288ed4e8401cd75e10b85790af0f0b9e96f524b = $this->env->getExtension("native_profiler");
        $__internal_49478cdcf16a42525ea81136d288ed4e8401cd75e10b85790af0f0b9e96f524b->enter($__internal_49478cdcf16a42525ea81136d288ed4e8401cd75e10b85790af0f0b9e96f524b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_49478cdcf16a42525ea81136d288ed4e8401cd75e10b85790af0f0b9e96f524b->leave($__internal_49478cdcf16a42525ea81136d288ed4e8401cd75e10b85790af0f0b9e96f524b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
