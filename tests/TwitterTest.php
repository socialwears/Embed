<?php

class TwitterTest extends TestCaseBase
{
    public function _testNormal()
    {
        $this->assertEmbed(
            'https://twitter.com/pepephone/status/436461658601713664',
            [
                'code' => '<blockquote class="twitter-tweet"><p>RT <a href="https://twitter.com/PabloHerreros">@PabloHerreros</a> Pepephone rompe la baraja - <a href="http://t.co/mFn7mcB1vy">http://t.co/mFn7mcB1vy</a></p>&mdash; pepephone (@pepephone) <a href="https://twitter.com/pepephone/status/436461658601713664">February 20, 2014</a></blockquote>'."\n".'<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>',
            ]
        );
    }

    public function testOmitScript()
    {
        $this->assertEmbed(
            'https://twitter.com/pepephone/status/436461658601713664',
            [
                'code' => '<blockquote class="twitter-tweet"><p lang="es" dir="ltr">RT <a href="https://twitter.com/PabloHerreros">@PabloHerreros</a> Pepephone rompe la baraja - <a href="http://t.co/mFn7mcB1vy">http://t.co/mFn7mcB1vy</a></p>&mdash; pepephone (@pepephone) <a href="https://twitter.com/pepephone/status/436461658601713664">February 20, 2014</a></blockquote>'."\n",
            ], [
                'providers' => [
                    'oembed' => [
                        'parameters' => [
                            'omit_script' => true,
                        ],
                    ],
                ],
            ]
        );
    }
}
