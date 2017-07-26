require 'github/markup'

puts GitHub::Markup.render_s(GitHub::Markups::MARKUP_MARKDOWN, STDIN.read)
