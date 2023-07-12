/** @type {import('tailwindcss').Config} */

const defaultTheme = require("tailwindcss/defaultTheme");
const colors = require('tailwindcss/colors');

module.exports = {
  mode: 'jit',
  content: ["./**/*.php"],
  theme: {
    screens: {
      ...defaultTheme.screens,
      'xs':  '320px',
      'sm':  '480px',
      'md':  '786px',
      'lg':  '1024px',
      'xl':  '1280px',
      '2xl': '1497px',
      '3xl': '1640px',
    },
    container: {
      center: true,
      padding: {
        'xs':  '1rem',
        'sm':  '1.5rem',
        'md':  '1.75rem',
        'lg':  '2rem',
        'xl':  '2.25rem',
        '2xl':  '2.5rem',
      }
    },
    colors: {
      black: colors.black,
      white: colors.white,
      gray: colors.gray,
      green: colors.green,
      blue: colors.blue,
      yellow: colors.amber,
      red: colors.red,
      teal: colors.teal
    },
    fontFamily: {
      'body': ['"Inter"'],
      'heading': ['"PlayfairDisplay"'],
      'display': ['Inter'],
    }
  },
  extend: {
    zIndex: {
      '-2': '-2',
      '-1': '-1',
      '1': '1',
      '2': '2',
      '3': '3',
      '4': '4',
      '5': '5',
      '6': '6',
      '7': '7',
      '8': '8',
      '9': '9'
    },
    
  },
  variants: {},
  plugins: [],
}
