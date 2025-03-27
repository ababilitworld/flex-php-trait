<?php

namespace Ababilithub\FlexPhpTrait\Wordpress\PostType\PostTypeV1;

use Ababilithub\FlexPhpTrait\Wordpress\PostType\PostTypeV1\Label\Label;
use Ababilithub\FlexPhpTrait\Wordpress\PostType\PostTypeV1\Arg\Arg;
use Ababilithub\FlexPhpTrait\Wordpress\PostType\PostTypeV1\Meta\Meta;

trait PostTypeV1
{
    use Label, Arg, Meta;

    /**
     * Register a meta box and save the associated meta.
     *
     * @param string $key
     * @param array $args
     */
    public function register_meta(string $key, array $args = []): void
    {
        add_action('add_meta_boxes', function () use ($key, $args) {
            add_meta_box(
                $key . '_box',
                $args['title'] ?? ucfirst($key),
                $args['callback'] ?? null,
                $this->post_type,
                $args['context'] ?? 'advanced',
                $args['priority'] ?? 'default'
            );
        });

        add_action('save_post', function ($postId) use ($key) {
            if (isset($_POST[$key])) {
                update_post_meta($postId, $key, sanitize_text_field($_POST[$key]));
            }
        });
    }
}