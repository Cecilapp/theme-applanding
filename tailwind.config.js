module.exports = {
  purge: {
    enabled: true,
    mode: 'all',
    content: [
      './layouts/**/*.html.twig',
      './themes/**/layouts/**/*.html.twig',
    ]
  }
}
