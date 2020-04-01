module.exports = {
  theme: {
    extend: {
      borderColor: theme => ({
        default: theme('colors.gray.header', '#D8DEE9'),
      })
    },
    fontFamily: {
      'rubik': 'Rubik, Arial, sans-serif',
    },
    textColor: {
      'header-gray': '#4c566a',
      'sub-header-gray': '#6c757d',
      'footer-gray': '#4c566a',
      'post-title-link-gray': '#4c566a',
      'post-summary-gray': '#4c566a',
      'post-date-gray': '#999999',
      'post-content-grey': '#2E3440'
    },
  },
  variants: {},
  plugins: [],
}
