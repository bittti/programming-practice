# coding: utf-8

"""
Given a string, return a new string where the first and last chars have been exchanged.

front_back('code') → 'eodc'
front_back('a') → 'a'
front_back('ab') → 'ba'
"""

def front_back(str):
    if len(str) <= 1:
        return str
    elif len(str) == 2:
        return str[-1] + str[0]
    new_str = ''
    for i in range(1, len(str)-1):
        new_str = new_str + str[i]
    return str[-1] + new_str + str[0]
