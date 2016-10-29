<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_96eb5bc4621a20fc1589042fc77e9fdad7a396314875a36d369ba8a94969bb90 extends Twig_Template
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
        $__internal_13031e89200281934a9558a2d369b0c64f413e5a3267f23de359a918f19153d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13031e89200281934a9558a2d369b0c64f413e5a3267f23de359a918f19153d9->enter($__internal_13031e89200281934a9558a2d369b0c64f413e5a3267f23de359a918f19153d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_13031e89200281934a9558a2d369b0c64f413e5a3267f23de359a918f19153d9->leave($__internal_13031e89200281934a9558a2d369b0c64f413e5a3267f23de359a918f19153d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }
}
