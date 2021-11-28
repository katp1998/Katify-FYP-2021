import cv2
import numpy 
import io

face_cascade = cv2.CascadeClassifier(cv2.data.haarcascades + 'haarcascade_frontalface_default.xml')
img = cv2.imread('test2.jpg') #read image
gray_img = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY) #converting image into a grayscale image
faces = face_cascade.detectMultiScale(gray_img, 1.5, 4) #detecting faces

for (x, y, w, h) in faces:
    face_img = cv2.rectangle(img, (x,y), (x+w, y+h), (0, 0, 0), 1)
    
    #getting dominant color
    pixels = numpy.float32(face_img.reshape(-1,3))  
    n_colors = 2
    criteria = (cv2.TERM_CRITERIA_EPS + cv2.TERM_CRITERIA_MAX_ITER, 200, .1)
    flags = cv2.KMEANS_RANDOM_CENTERS
    _, labels, palette = cv2.kmeans(pixels, n_colors, None, criteria, 10, flags)
    _, counts = numpy.unique(labels, return_counts=True)
    domi = palette[numpy.argmax(counts)]
    
    #getting avg color
    #avg_color_row = numpy.average(face_img, axis=0)
    #avg_color = numpy.average(avg_color_row, axis=0)
    
    cv2.imshow('img', img)
    print (domi)

cv2.imshow('img', img)
cv2.waitKey()