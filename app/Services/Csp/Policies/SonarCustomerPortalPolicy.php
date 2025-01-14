<?php

namespace App\Services\Csp\Policies;

use Spatie\Csp\Directive;
use Spatie\Csp\Keyword;
use Spatie\Csp\Policies\Basic;
use Spatie\Csp\Value;

class SonarCustomerPortalPolicy extends Basic
{
	public function configure()
	{
        $this
            // Duplicated from `Basic` because nonce overrides
            // the `unsafe-inline` for styles (see below) and
            // there's no `removeNonceForDirective`.
            ->addDirective(Directive::BASE, Keyword::SELF)
            ->addDirective(Directive::CONNECT, Keyword::SELF)
            ->addDirective(Directive::DEFAULT, Keyword::SELF)
            ->addDirective(Directive::FORM_ACTION, Keyword::SELF)
            ->addDirective(Directive::IMG, Keyword::SELF)
            ->addDirective(Directive::MEDIA, Keyword::SELF)
            ->addDirective(Directive::OBJECT, Keyword::NONE)
            ->addDirective(Directive::SCRIPT, Keyword::SELF)
            ->addDirective(Directive::STYLE, Keyword::SELF)
            ->addNonceForDirective(Directive::SCRIPT)

            ->addDirective(Directive::FRAME, [
                'self',
                'js.stripe.com',
                'https://www.google-analytics.com',
                'https://www.googletagmanager.com',
                'https://client.crisp.chat',
            ])

            ->addDirective(Directive::FRAME_ANCESTORS, Keyword::NONE)

            ->addDirective(Directive::FORM_ACTION, [
                'self',
                'www.paypal.com',
                'https://www.google-analytics.com',
                'https://www.googletagmanager.com',
                'https://client.crisp.chat',
            ])

            ->addDirective(Directive::UPGRADE_INSECURE_REQUESTS, Value::NO_VALUE)

            ->addDirective(Directive::SCRIPT, [
                'self',
                'js.stripe.com',
                'https://www.google-analytics.com',
                'https://www.googletagmanager.com',
                'https://client.crisp.chat',
            ])

			->addDirective(Directive::STYLE, [
				'self',
                'https://client.crisp.chat',
                'unsafe-inline', // Required for TinyMCE https://www.tiny.cloud/docs/tinymce/6/tinymce-and-csp/
			])

            ->addDirective(Directive::FONT, [
                'self',
                'https://client.crisp.chat',
            ])

            ->addDirective(Directive::IMG, [
                'self',
                'https://client.crisp.chat',
                'https://image.crisp.chat',
                'https://*.crisp.chat',
                'data:',
            ])

            ->addDirective(Directive::CONNECT, [
                'self',
                'api.stripe.com',
                'https://www.google-analytics.com',
                'https://www.googletagmanager.com',
                'https://client.crisp.chat',
                'wss://client.relay.crisp.chat',
            ]);
    }
}
