require 'github/markup'

s = GitHub::Markup.render('README.markdown', "* One\n* Two")
# s = GitHub::Markup.render_s(GitHub::Markups::MARKUP_MARKDOWN, "* One\n* Two")
p s
