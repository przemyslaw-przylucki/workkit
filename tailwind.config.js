module.exports = {
  purge: [],
  theme: {
    extend: {
        colors: {
            main: '#4652AF',
            accent: '#BFC6F1'
        }
    },
  },
  variants: {},
  plugins: [
      require('@tailwindcss/ui')
  ],
}
